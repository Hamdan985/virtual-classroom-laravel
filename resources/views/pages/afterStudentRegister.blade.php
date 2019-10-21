{{-- @extends('layouts.myapp')

@section('content')
        <h1> IN  POST STUDENT REGISTER </h1>
        <h1> DETAILS ENTERED </h1>
        <h1>NAME : {{$name}}</h1>
        <h1>ROLL NO :{{$rollno}}</h1>
        <h1>BRANCH : {{$branch}}</h1>
        <h1>YEAR : {{$year}}</h1>
        <h1>EMAIL : {{$email}}</h1>
        <h1>PHONE : {{$phone}}</h1>
        <h1>USERNAME : {{$username}}</h1>
        <div class="col-6">
                <section> <button class="btn"><a href="{{ url('/studentLogin') }}"> PROCEED TO LOGIN </a></button> </section>
                <section><button class="btn"><a href="{{ url('/student/1/edit') }}"> EDIT DETAILS </a></button></section>
        </div>
        
@endsection --}}
@extends('layouts.myapp')

@section('content')
               <div class="row">
 
                <div class="col-md-4"></div>

                <div class="col-md-4 stdform mt-5">

                        <table class="table table-bordered" style="font-size:25px;">
                                <thead class="thead-dark">
                                        <th colspan="2">{{$name}}'s Details</th>
                                        
                                </thead>
                                <tbody>
                                        
                                        <tr>
                                                <td>Username </td>
                                                <td>{{$username}}</td>
                                        </tr>
                                        <tr>
                                                <td>Name </td>
                                                <td>{{$name}}</td>
                                        </tr>
                                        <tr>
                                                <td>Roll No </td>
                                                <td>{{$rollno}} </td>
                                        </tr>
                                        <tr>
                                                <td>Branch </td>
                                                <td>{{$branch}} </td>
                                        </tr>
                                        <tr>
                                                <td>Year </td>
                                                <td>{{$year}}</td>
                                        </tr>
                                        <tr>
                                                <td>Email </td>
                                                <td>{{$email}}</td>
                                        </tr>
                                        <tr>
                                                <td>Phone </td>
                                                <td>{{$phone}} </td>

                                        </tr>
                                        
                                </tbody>
                                
                        </table>
                        @if(!Auth::check()) 
                        <a class="btn btn-primary" href="{{ url('/studentLogin') }}"> PROCEED TO LOGIN </a>
                        @endif
                </div>

                <div class="col-4">
                
        </div>

                </div>

        </div>
@endsection