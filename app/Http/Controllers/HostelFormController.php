<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Student;
use App\Models\HostelForm;
//use App\Models\Hostel;

class HostelFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->userroll == 'student'){
                $current_useremail=Auth::user()->email;
                $current_student=Student::select("*")
                    ->where('email','=',$current_useremail)
                    ->first();
                return view('hostel_form.create',[
                    'current_student'=> $current_student,
                ]);
            }

            else if (Auth::user()->userroll == 'warden' || (Auth::user()->userroll == 'subwarden')){
                $pending_requests=DB::table('hostel_form')
                        ->crossJoin('students')
                        ->select('hostel_form.id AS hfid','hostel_form.*','students.*')
                        ->where('hostel_form.stu_id','=',DB::raw('students.id'))
                        ->where('status','=','Pending')
                        ->get();

                $approved_requests=DB::table('hostel_form')
                ->crossJoin('students')
                ->select('hostel_form.id AS hfid','hostel_form.*','students.*')
                ->where('hostel_form.stu_id','=',DB::raw('students.id'))
                ->where('status','=','approved')
                ->get();

        return view('hostel_form.index',[
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
        if (Auth::check()) {
            if (Auth::user()->userroll == 'student'){
                $current_useremail=Auth::user()->email;
                $current_student=Student::select("*")
                    ->where('email','=',$current_useremail)
                    ->first();
                return view('hostel_form.create',[
                    'current_student'=> $current_student,
                ]);
            }
            else if (Auth::user()->userroll == 'warden' || (Auth::user()->userroll == 'subwarden')){
                return view('hostel_form.index');
            }
        }
        else{
            return view('auth.login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $current_useremail=Auth::user()->email;
        $current_student=Student::select("*")
            ->where('email','=',$current_useremail)
            ->first();
       $current_student_id=$current_student->id;

        try{
            $hostelform=HostelForm::create([
                'stu_id'=>   $current_student_id,
                'year'=> $request->input('year'),
                'semester'=> $request->input('semester'),
                'disease'=> $request->input('disease'),
                'reason'=> $request->input('reason'),
                
                'status' => "Pending",
            ]);
            return view('hostel_form.create',[
                'current_student'=> $current_student,
                'success'=>'Request sent successfully',
            ]);
            
            
        }
        catch(\Illuminate\Database\QueryException $ex){    
            return view('hostel_form.create',[
                'message'=>'Sorry. Request Failed.',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check()) {
            if (Auth::user()->userroll == 'warden' || (Auth::user()->userroll == 'subwarden')){
                $hostelform=HostelForm::find($id);
                // $applied_student_id=$hostelform->stu_id;
         
                 $applied_student=DB::table('hostel_form')
                                 ->crossJoin('students')
                                 ->select('hostel_form.id AS hfid','hostel_form.*','students.*')
                                 ->where('hostel_form.stu_id','=',DB::raw('students.id'))
                                 ->where('hostel_form.id','=',$id)
                                 ->first();
                             return view('hostel_form.hostelformshow',[
                                 
         
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
        $hostelform=HostelForm::find($id);
       // $applied_student_id=$hostelform->stu_id;

        $applied_student=DB::table('hostel_form')
                        ->crossJoin('students')
                        ->select('hostel_form.id AS hfid','hostel_form.*','students.*')
                        ->where('hostel_form.stu_id','=',DB::raw('students.id'))
                        ->where('hostel_form.id','=',$id)
                        ->first();
                    return view('hostel_form.assignhostel',[
                        

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
            $hostel_form=HostelForm::where('id',$id )
            ->update([
                 

                'hostelname'=> $request->input('hostelname'),
                'roomno'=> $request->input('roomno'),
                'bedno'=> $request->input('bedno'),
                'status'=>"approved",

            ]);

            return redirect('/hostel-form');
        }
        catch(\Illuminate\Database\QueryException $ex){
                return view('hostel_form.assignhostel',['message'=>'Sorry. Updated Failed.']);
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
        $hostel_form=HostelForm::find($id);
        $stu_email=$hostel_form->email;
        $user=User::select("*")
            ->where('email', '=',$stu_email)
            ->first();
        $hostel_form->delete();
        $user->delete();
        return redirect('/hostel-form');
    }
}
