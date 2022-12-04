<?php

namespace App\Http\Controllers;

use App\Models\Appeals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\HostelForm;



class AppealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        if (Auth::check()) {
            /*
            if (Auth::user()->userroll == 'student'){
                $current_useremail=Auth::user()->email;
                $current_student=Student::select("*")
                    ->where('email','=',$current_useremail)
                    ->first();
                return view('hostel_form.create',[
                    'current_student'=> $current_student,
                ]);
             }else
            */
             if (Auth::user()->userroll == 'warden' || (Auth::user()->userroll == 'subwarden')){
                $pending_requests=DB::table('appeals')
                        ->crossJoin('hostel_form')
                        //->crossJoin('students')
                        ->select('appeals.id AS asid','appeals.*','hostel_form.*')
                        ->where('appeals.student_id','=',DB::raw('hostel_form.stu_id'))
                        //->where('student.id','=',DB::raw('hostel_form.stu_id'))
                        ->where('appeals.status','=','Pending')
                        ->get();
                        /*
                        $applied_student=DB::table('hostel_form')
                        ->crossJoin('students')
                        ->select('hostel_form.id AS hfid','hostel_form.*','students.*')
                        ->where('hostel_form.stu_id','=',DB::raw('students.id'))
                        ->where('hostel_form.id','=',$id)
                        ->first();
                    return view('hostel_form.assignhostel',[
                        

                    ])->with('applied_student',$applied_student);
                    */

                $approved_requests=DB::table('appeals')
                ->crossJoin('hostel_form')
                ->select('appeals.student_id AS asid','appeals.*','hostel_form.*')
                ->where('appeals.student_id','=',DB::raw('hostel_form.stu_id'))
                ->where('appeals.status','=','approved')
                ->get();
/*
        return view('appeals.approveappeal',[
            'pending_requests'=>$pending_requests,
            'approved_requests'=>$approved_requests,
        ]);

        */
        return view('appeals.index',[
            'pending_requests'=>$pending_requests,
            'approved_requests'=>$approved_requests,
        ]);
                
            }
        }
        else{
            return view('auth.login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if (Auth::check()) {
            if (Auth::user()->userroll == 'warden' || (Auth::user()->userroll == 'subwarden')){
                $appeals=Appeals::find($id);
                // $applied_student_id=$hostelform->stu_id;
                /* $applied_student=DB::table('hostel_form')
                                 ->crossJoin('students')
                                 ->select('hostel_form.id AS hfid','hostel_form.*','students.*')
                                 ->where('hostel_form.stu_id','=',DB::raw('students.id'))
                                 ->where('hostel_form.id','=',$id)
                                 ->first();
                             return view('hostel_form.hostelformshow',[
                                 
         
                             ])->with('applied_student',$applied_student);
                 */
         
                 $applied_student=DB::table('appeals')
                                 ->crossJoin('hostel_form')
                                 ->select('appeals.id AS hfid','appeals.*','hostel_form.*')
                                 ->where('appeals.student_id','=',DB::raw('hostel_form.id'))
                                 //where('hostel_form.stu_id','=',DB::raw('students.id'))
                                 ->where('appeals.id','=',$id)
                                 ->first();
                             return view('appeals.approveappeal',[
                                 
         
                             ])->with('applied_student',$applied_student);
                
            }
            else{
                return view('auth.home');
            }
        }
        else{    
            return view('auth.login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $applied_student=DB::table('appeals')
                        ->crossJoin('hostel_form')
                        ->select('appeals.id AS asid','appeals.*','hostel_form.*')
                        ->where('appeals.student_id','=',DB::raw('hostel_form.id'))
                        ->where('appeals.id','=',$id)
                        ->first();
                    return view('appeals.approveappeal',[
                        'status'=>"approved",

                    ])->with('applied_student',$applied_student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try{
            $approved_appeal=Appeals::where('id',$id )
            ->update([
                 


                'status'=>"approved",

            ]);

            return redirect('/appeals');
        }
        catch(\Illuminate\Database\QueryException $ex){
                return view('appeals.approveappeal',['message'=>'Sorry. Updated Failed.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        /*
        $appeals=Appeals::find($id);
        $stu_email=$appeals->email;
        $user=User::select("*")
            ->where('email', '=',$stu_email)
            ->first();
        $appeals->delete();
        $user->delete();
        return redirect('/appeals');
        */
        $appeals=Student::find($id);
        $stu_email=$appeals->email;
        $appeal=Appeals::select("*")
            ->where('student_id', '=',$id)
            ->first();
        $appeals->delete();
        $appeal->delete();
        return redirect('/appeals');
    }
}
