<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Student;

class LoginController extends Controller
{
    
    function index(Request $request)
    {
        return view('auth.login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            //return redirect()->intended('/');
            $students=Student::all(); 

            return view('auth.home',[
                'students'=>$students,
            ]);

        }
        else{

            return view('auth.login',['message'=>'The provided credentials do not match our records.']);
        /*      
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        */
        }
    
    }

        /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }



    function login(Request $request)
    {

        $user= User::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
            $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
            return response($response, 201);      

    }
}
