<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;

class AssignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->except('index','studentIndex', 'show');
    }

    public function index()
    {
        $assignments = Assignment::all();
        return view('pages.assignmentIndex')->with('assignments', $assignments );
    }

    public function studentIndex()
    {
        $assignments = Assignment::all();
        return view('pages.studentAssignment')->with('assignments', $assignments );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createAssignment'); 
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
            'title' => 'required',
            'body' => 'required',
            'branch' => 'required',
            'year' => 'required'
        ]);

        $assignment = new Assignment;

        $assignment->title = $request->input('title');
        $assignment->body = $request->input('body');
        $assignment->branch = $request->input('branch');
        $assignment->year = $request->input('year');
        $assignment->save();

        return redirect('/assignment')->with('success', 'Assignment Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignment = Assignment::find($id);
        return view('pages.showAssignment')->with('assignment', $assignment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assignment = Assignment::find($id);
        return view('pages.editAssignment')->with('assignment', $assignment);
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
            'title' => 'required',
            'body' => 'required',
            'branch' => 'required',
            'year' => 'required'
        ]);

        $assignment = Assignment::find($id);

        $assignment->title = $request->input('title');
        $assignment->body = $request->input('body');
        $assignment->branch = $request->input('branch');
        $assignment->year = $request->input('year');
        $assignment->save();

        return redirect('/assignment')->with('success', 'Assignment UPDATED');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assignment = Assignment::find($id);
        $assignment->delete();
        return redirect('/assignment')->with('success', 'Assignment DELETED');

    }
}
