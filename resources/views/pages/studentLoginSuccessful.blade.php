@extends('layouts.myapp')

@section('content')
       

        <div class="row">
 
                <div class="col-md-4"></div>

                <div class="col-md-4 stdform mt-5">

                        <table class="table table-bordered" style="font-size:25px;">
                                <thead class="thead-dark">
                                        <th colspan="2">{{$user->name}}'s Details</th>
                                        
                                </thead>
                                <tbody>
                                        
                                        <tr>
                                                <td>Username </td>
                                                <td>{{$user->username}}</td>
                                        </tr>
                                        <tr>
                                                <td>Name </td>
                                                <td>{{$user->name}}</td>
                                        </tr>
                                        <tr>
                                                <td>Roll No </td>
                                                <td>{{$user->rollno}} </td>
                                        </tr>
                                        <tr>
                                                <td>Branch </td>
                                                <td>{{$user->branch}} </td>
                                        </tr>
                                        <tr>
                                                <td>Year </td>
                                                <td>{{$user->year}}</td>
                                        </tr>
                                        <tr>
                                                <td>Email </td>
                                                <td>{{$user->email}}</td>
                                        </tr>
                                        <tr>
                                                <td>Phone </td>
                                                <td>{{$user->phone}} </td>

                                        </tr>
                                        
                                </tbody>
                        </table>                                
                        <a class="btn btn-primary" href="/studentAssignment">Assignment</a>
                </div>

                <div class="col-md-4">
                        <div class="dropdown float-right mt-3 mr-5">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$user->username}}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="/student/{{ $user->id }}/edit">Edit</a>
                                        <a class="dropdown-item" href="/logout">Logout</a>

                                </div>
                        </div>

                </div>

        </div>
@endsection