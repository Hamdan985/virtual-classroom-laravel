@extends('layouts.myapp')

@section('content')

<div class="row">
  <div class="col-md-2"></div>

  <div class="col-md-8 mt-5 stdform">
  
        <h2>Student Registration</h2><hr>
        {!! Form::open(['action' => 'StudentController@store', 'method' => 'POST'])  !!}
        
        <div class="row">
            <div class="form-group col">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Full Name'])}}
            </div>
            <div class="form-group col">
                {{Form::label('rollno', 'Rollno')}}
                {{Form::text('rollno', '', ['class' => 'form-control', 'placeholder' => 'Roll No'])}}
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                {{Form::label('branch', 'Branch')}}
                {!! Form::select('branch',['CO' => 'CO','ME'=>'ME','EE'=>'EE','EXTC'=>'EXTC','CE'=>'CE'],'',['class'=>'form-control','placeholder'=>'Select Branch']) !!}
            </div>
            <div class="form-group col">
                {{Form::label('year', 'Year')}}
                {!! Form::select('year',['FE' => 'FE','SE'=>'SE','TE'=>'TE','BE'=>'BE'],'',['class'=>'form-control','placeholder'=>'Select Year']) !!}
            </div>
        </div>


        <div class="row">
            <div class="form-group col">
                {{Form::label('email', 'Email')}}
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
            </div>
            <div class="form-group col">
                {{Form::label('phone', 'Phone')}}
                {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone'])}}
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                {{Form::label('username', 'Username')}}
                {{Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username'])}}
            </div>
            <div class="form-group col">
                {{Form::label('password', 'Password')}}
                {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
            </div>
        </div>
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
</div>
  
  <div class="col-md-2"></div>
  
    </div>
@endsection