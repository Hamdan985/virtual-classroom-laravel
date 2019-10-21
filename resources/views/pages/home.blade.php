@extends('layouts.myapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card stdcard">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    {!! Form::open(['action' => 'HomeController@showDetails', 'method' => 'GET'])  !!}
                    <div class="form-group col">
                        {{Form::label('branch', 'Branch')}}
                        {!! Form::select('branch',['CO' => 'CO','ME'=>'ME','EE'=>'EE','EXTC'=>'EXTC','CE'=>'CE'],'',['class'=>'form-control','placeholder'=>'Select Branch']) !!}
                    </div>
                    <div class="form-group col">
                        {{Form::label('year', 'Year')}}
                        {!! Form::select('year',['FE' => 'FE','SE'=>'SE','TE'=>'TE','BE'=>'BE'],'',['class'=>'form-control','placeholder'=>'Select Year']) !!}
                    </div>
                    {{Form::submit('Proceed', ['class'=>'btn btn-primary'])}}
                    {!!Form::close()!!}

    <div class="card mt-4 ">
        <div class="card-header ">
            <h2 class="card-title my-4"><strong>Student Details</strong></h2>
            <div class="card-tools">
                <a class="btn btn-primary" href="/assignment">Show Assignments</a>
                <a class="btn btn-primary" href="/assignment/create">Create Assignments</a>
                <a class="btn btn-primary" href="/studentRegister">Create Student</a>
                <a class="btn btn-primary float-right" href="{{ url('/logout') }}"> Logout </a>
                
            </div>
        </div>
        <div>
        </div>



        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Student Id</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Rollno </th>
                        <th scope="col">Year </th>
                        <th scope="col">Contact </th>
                        <th scope="col">Email </th>
                        <th scope="col">Action </th>
                    </tr>
                </thead>
                @if(count($students) > 0)
                @foreach($students as $stu)
                    <tr>
                        <th scope="row">{{ $stu->id }}</th>
                        <td>{{ $stu->name }}</td>
                        <td>{{ $stu->branch }}</td>
                        <td>{{ $stu->rollno }}</td>
                        <td>{{ $stu->year }}</td>
                        <td>{{ $stu->phone }}</td>
                        <td>{{ $stu->email }}</td>
                        <td>

                        <a class="btn btn-primary mb-2" href="home/view/{{ $stu->id }}"><i class="fa fa-eye" style="font-size:20px; width: 25px"></i></a>
                        <a class="btn btn-success mb-2"  href="student/{{ $stu->id }}/edit"><i class="fa fa-edit" style="font-size:20px; width: 25px"></i></a>
                        {!!Form::open(['action' => ['StudentController@destroy', $stu->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        <a >{{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}</a>
                        {{ Form::close() }}
                        </td>
                    </tr>
                    
                @endforeach
                @else
                        <tr>
                        <td colspan='8'>
                        NO STUDENTS AVAILABLE
                        </td>
                        </tr>
                    @endif
        </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
