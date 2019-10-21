{{-- @extends('layouts.myapp')

@section('content')
        <h1>IN STUDENT abc LOGIN</h1>     
        <h1> ID :{{$student->id}} </h1>
        <h1> NAME : {{$student->name}} </h1>
        <h1> ROLL NO :{{$student->rollno}} </h1>
        <h1> BRANCH :{{$student->branch}} </h1>
        <h1> YEAR :{{$student->year}} </h1>
        <h1> EMAIL :{{$student->email}} </h1>
        <h1> PHONE : {{$student->phone}} </h1>
        <h1> USERNAME : {{$student->username}} </h1>

        <div style="margin-top: 50px;">

        </div>

@endsection --}}
@extends('layouts.myapp')

@section('content')
       

        <div class="row">
 
                <div class="col-md-4"></div>

                <div class="col-md-4 stdform mt-5">

                        <table class="table table-bordered" style="font-size:25px;">
                                <thead class="thead-dark">
                                        <th colspan="2">{{$student->name}}'s Details</th>
                                        
                                </thead>
                                <tbody>
                                        
                                        <tr>
                                                <td>Username </td>
                                                <td>{{$student->username}}</td>
                                        </tr>
                                        <tr>
                                                <td>Name </td>
                                                <td>{{$student->name}}</td>
                                        </tr>
                                        <tr>
                                                <td>Roll No </td>
                                                <td>{{$student->rollno}} </td>
                                        </tr>
                                        <tr>
                                                <td>Branch </td>
                                                <td>{{$student->branch}} </td>
                                        </tr>
                                        <tr>
                                                <td>Year </td>
                                                <td>{{$student->year}}</td>
                                        </tr>
                                        <tr>
                                                <td>Email </td>
                                                <td>{{$student->email}}</td>
                                        </tr>
                                        <tr>
                                                <td>Phone </td>
                                                <td>{{$student->phone}} </td>

                                        </tr>
                                        
                                </tbody>
                        </table>
                        

                </div>

                <div class="col-md-4">
                        </div>

                </div>

        </div>
@endsection