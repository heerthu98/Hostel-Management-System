<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HostelFormController;
use App\Http\Controllers\AppealsController;
use App\Http\Controllers\HostelController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('auth.home');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');

Route::get('/import-students','App\Http\Controllers\StudentController@importStudents');
Route::post('/import-students', 'App\Http\Controllers\StudentController@uploadStudents');
Route::get('/add-student', 'App\Http\Controllers\StudentController@create');
Route::get('/assign-hostel', 'App\Http\Controllers\HostelFormController@create');
Route::resource('/students',StudentController::class);
Route::resource('/hostel-form',HostelFormController::class);//hostel-formshow
Route::resource('/hostel-formshow',HostelFormController::class);
Route::resource('/appeals',AppealsController::class);
Route::resource('/appealsapproved',AppealsController::class);
Route::resource('/hostels',HostelController::class);
Route::get('/add-hostels', 'App\Http\Controllers\HostelController@create');
//Route::get('/hostel-form', 'App\Http\Controllers\StudentController@create');





