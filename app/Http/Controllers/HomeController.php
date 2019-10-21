<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home')->with('students',Student::all());
    }
    public function showDetails(Request $request)
    {
        // dd($request->branch);
        // dd($request->year);

        $students = Student::where("branch", $request->branch)->where("year", $request->year)->get();
        return view('pages.home')->with(array('students'=>$students));
        
    }
}