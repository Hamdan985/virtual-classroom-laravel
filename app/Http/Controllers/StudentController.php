<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        return ('hello world');
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
        $this->validate($request, [
            'name' => 'required',
            'rollno' => 'required',
            'branch' => 'required',
            'year' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'username' => 'required',
            'password' => 'required'
            
        ]);

        $student = new Student;

        $student->name = $request->input('name');
        $student->rollno = $request->input('rollno');
        $student->branch = $request->input('branch');
        $student->year = $request->input('year');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->username = $request->input('username');
        $student->password = $request->input('password');
        $name = $student->name;
        $rollno = $student->rollno;
        $branch = $student->branch;
        $year = $student->year;
        $email = $student->email;
        $phone = $student->phone;
        $username = $student->username;

        $student->save();

        return view('pages.afterStudentRegister', compact('name', 'rollno', 'branch', 'year', 'email', 'phone', 'username'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('pages.viewStudentAdmin')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('pages.editStudent')->with('student', $student);
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
        $this->validate($request, [
            'name' => 'required',
            'rollno' => 'required',
            'branch' => 'required',
            'year' => 'required',
            'email' => 'required',
            'phone' => 'required'            
        ]);

        $student = Student::find($id);

        $student->name = $request->input('name');
        $student->rollno = $request->input('rollno');
        $student->branch = $request->input('branch');
        $student->year = $request->input('year');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $name = $student->name;
        $rollno = $student->rollno;
        $branch = $student->branch;
        $year = $student->year;
        $email = $student->email;
        $phone = $student->phone;

        $student->save();

        return redirect('/studentLogin')->with('success', 'USER UPDATED');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/home')->with('success', 'STUDENT DELETED');
    }

    public function login(Request $request){
      $user = new Student;
      $user = Student::where("username",$request->username)->where('password',$request->password)->first();

      $var =  Student::where("username",$request->username)->where('password',$request->password)->first();
        if($var){
            return view('pages.studentLoginSuccessful')->with('user', $user);
        }
        else{
            return redirect('/studentLogin')->with('error', 'INVALID CREDENTIALS');
        } 
    }
}
