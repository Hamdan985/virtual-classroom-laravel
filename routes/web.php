<?php

use App\Student;

Route::get('/', 'PagesController@index');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/studentLogin', 'PagesController@studentLogin');
Route::get('/studentRegister', 'PagesController@studentRegister');
Route::get('/studentAssignment', 'AssignmentsController@studentIndex');

Route::get('home/view/{id}',function($id){
    $student = Student::find($id);
    return view('pages.viewStudentAdmin')->with('student', $student);
});


Auth::routes();
Route::resource('student', 'StudentController');  
Route::post('student/login','StudentController@login')->name('student.login');  
Route::resource('assignment', 'AssignmentsController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeShow', 'HomeController@showDetails')->name('home.show');


