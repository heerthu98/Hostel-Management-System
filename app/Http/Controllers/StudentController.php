<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Student;
use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->userroll == 'warden' || (Auth::user()->userroll == 'subwarden')){
                $students=Student::all();
                $male_students=Student::select("*")
                    ->where('gender','=','Male')
                    ->orderBy('batch', 'DESC')
                    ->orderBy('course', 'ASC')
                    ->orderBy('enroll_no', 'ASC')
                    ->get();
                $female_students=Student::select("*")
                    ->where('gender','=','Female')
                    ->get(); 

                return view('students.index',[
                    'students'=>$students,
                    'male_students'=>$male_students,
                    'female_students'=>$female_students,

                ]);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            if (Auth::user()->userroll == 'warden' || (Auth::user()->userroll == 'subwarden')){
                return view('students.create');
        //return view('hostel_form.create');
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $fullname=$request->input('first_name').' '.$request->input('last_name');
            $student=student::create([
                'first_name'=> $request->input('first_name'),
                'last_name'=> $request->input('last_name'),
                'enroll_no'=> $request->input('enroll_no'),
                'course'=> $request->input('course'),
                'batch'=> $request->input('batch'),
                'gender'=> $request->input('gender'),
                'phone'=> $request->input('phone'),
                'town'=> $request->input('town'),
                'town_distance'=> $request->input('town_distance'),
                'uni_distance'=> $request->input('uni_distance'),
                'father_name'=> $request->input('father_name'),
                'father_income'=> $request->input('father_income'),
                'mother_name'=> $request->input('mother_name'),
                'mother_income'=> $request->input('mother_income'),
                'email'=> $request->input('email'),  
                'address'=> $request->input('address'),  
            ]);

            $user=User::create([
                'name'=>$fullname,
                "email" => $request->input('email'), 
                "password" => Hash::make('1234'),
                "userroll" => 'student',
            ]);

            return redirect('/students');
        }
        catch(\Illuminate\Database\QueryException $ex){
            return view('students.create',['message'=>'Sorry. Created Failed.']);
        }
            

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if (Auth::check()) {
            if (Auth::user()->userroll == 'warden' || (Auth::user()->userroll == 'subwarden')){
                if($request->input('search')){
                    $search=$request->input('search');
        /*
                    $students=Student::select("*")
                    ->where('first_name', 'LIKE', '%'.$search.'%')
                    ->orWhere('last_name', 'LIKE', '%'.$search.'%')
                    ->orWhere('course', 'LIKE', '%'.$search.'%')
                    ->orWhere('enroll_no', 'LIKE', '%'.$search.'%')
                    ->orWhere('batch', 'LIKE', '%'.$search.'%')
                    ->get();
        */
                    $students=Student::select("*")
                    ->where('course', 'LIKE', '%'.$search.'%')
                    ->get();

                    $male_students=Student::select("*")
                    ->where('course','=',$search)
                    ->where('gender','=','Male')
                    ->get();
                    
                    $female_students=Student::select("*")
                    ->where('course','=',$search)
                    ->where('gender','=','Female')
                    ->get();

                    return view('students.index',[
                        'students'=>$students,
                        'male_students'=>$male_students,
                        'female_students'=>$female_students,
            
                    ]);
                }
                else{
                    $student=Student::find($id);
                    return view('students.show',[
                        'student'=>$student,

                    ]);
                }
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
        if (Auth::check()) {
            if (Auth::user()->userroll == 'warden' || (Auth::user()->userroll == 'subwarden')){
                $student=Student::find($id);

                return view('students.edit',[
                    
                ]
                )->with('student',$student);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $student=Student::where('id',$id )
            ->update([
                'course'=> $request->input('course'),
                'batch'=> $request->input('batch'),
                'gender'=> $request->input('gender'),
                'phone'=> $request->input('phone'),
                'town'=> $request->input('town'),
                'town_distance'=> $request->input('town_distance'),
                'uni_distance'=> $request->input('uni_distance'),
                'father_name'=> $request->input('father_name'),
                'father_income'=> $request->input('father_income'),
                'mother_name'=> $request->input('mother_name'),
                'mother_income'=> $request->input('mother_income'),
                'address'=> $request->input('address'),  

            ]);

            return redirect('/students');
        }
        catch(\Illuminate\Database\QueryException $ex){
                return view('students.edit',['message'=>'Sorry. Updated Failed.']);
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
        $student=Student::find($id);
        $stu_email=$student->email;
        $user=User::select("*")
            ->where('email', '=',$stu_email)
            ->first();
        $student->delete();
        $user->delete();
        return redirect('/students');
    }

      /**
     * Import Users 
     * @param Null
     * @return View File
     */

    public function importStudents(){
        if (Auth::check()) {
            if (Auth::user()->userroll == 'warden' || (Auth::user()->userroll == 'subwarden')){
                return view('students.import');
            }   
            else{
                return view('auth.home');
            }
        }
        else{    
            return view('auth.login');
        }
    }

    public function uploadStudents(Request $request)
    {
        
        try{
            Excel::import(new StudentsImport, $request->file);
            return view('students.import',['success'=> 'All Students were Imported Successfully']);      
        }
        
        catch(\Illuminate\Database\QueryException $ex){
            $errorCode = $ex->errorInfo[1];
            if($errorCode == 1062){ 
                return view('students.import',['message'=>'Sorry. Imported Failed. Duplicate Email or Entroll_No were imported']);
            }
            else{
                return view('students.import',['message'=>'Sorry. Imported Failed.']);
            }
        }

    }


    
}
