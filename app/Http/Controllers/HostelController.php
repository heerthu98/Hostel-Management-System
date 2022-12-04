<?php

namespace App\Http\Controllers;

use App\Models\Hostel;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostels=Hostel::all();
        $male_students=Hostel::select("*")
            ->where('gender_type','=','Male')
            ->orderBy('student_year', 'ASC')
            ->get();
        $female_students=Hostel::select("*")
            ->where('gender_type','=','Female')
            ->get(); 

        return view('hostel.index',[
            'hostels'=>$hostels,
            'male_students'=>$male_students,
            'female_students'=>$female_students,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('hostel.create');

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
            $hostel=Hostel::create([
                'hostel_name'=> $request->input('hname'),
                'no_of_beds'=> $request->input('bedno'),
                'no_of_rooms'=> $request->input('roomno'),
                'gender_type'=> $request->input('gender'),
                'student_year'=> $request->input('stuyear'),
                'available_beds'=> $request->input('bedno'),
            ]);


            return redirect('/hostels');
        }
        catch(\Illuminate\Database\QueryException $ex){
            return view('hostel.create',['error'=>'Sorry. Created Failed.']);
        }
        
        try{
            $hostel=Hostel::create([
                'hostel_name'=> $request->input('hname'),
                'no_of_beds'=> $request->input('bedno'),
                'no_of_rooms'=> $request->input('roomno'),
                'gender_type'=> $request->input('gender'),
                'student_year'=> $request->input('stuyear'),
                'available_beds'=> $request->input('bedno'),
                  
            ]);

            return redirect('/hostels');
        }
        catch(\Illuminate\Database\QueryException $ex){
            return view('hostel.create',['error'=>'Sorry. Created Failed.']);
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

        $hostel=Hostel::find($id);
            return view('hostel.show',[
                'hostel'=>$hostel,

            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
/*
        $hostel=Hostel::find($id);

        return view('hostel.edit',[
            
        ]
        )->with('hostel',$hostel);
*/

        $hostel=Hostel::find($id);
        return view('hostel.edit',[
            'hostel'=>$hostel,
            ]);
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
            $hostel=Hostel::where('id',$id )
            ->update([
                'hostel_name'=> $request->input('hname'),
                'no_of_beds'=> $request->input('bedno'),
                'no_of_rooms'=> $request->input('roomNo'),
                'gender_type'=> $request->input('gender'),
                'student_year'=> $request->input('stuYear'),  

            ]);

            return redirect('/hostels');
        }
        catch(\Illuminate\Database\QueryException $ex){
                return view('hostel.edit',['message'=>'Sorry. Updated Failed.']);
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
        $hostel=Hostel::find($id);
        $hostel->delete();
        return redirect('/hostels');
    }
}
