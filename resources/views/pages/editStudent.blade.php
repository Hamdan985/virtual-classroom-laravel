@extends('layouts.myapp')

@section('content')
        <h1> IN STUDENT UPDATE </h1>
        <div class="container">
        {!! Form::open(['action' => ['StudentController@update', $student->id], 'method' => 'POST'])  !!}
        <div class="form-group col-4">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $student->name, ['class' => 'form-control', 'placeholder' => 'Full Name'])}}
        </div>
        <div class="form-group col-4">
                {{Form::label('rollno', 'Rollno')}}
                {{Form::text('rollno', $student->rollno, ['class' => 'form-control', 'placeholder' => 'Roll No'])}}
        </div>
        <div class="form-group col-4">
                {{Form::label('branch', 'Branch')}}
                {!! Form::select('branch',['CO' => 'CO','ME'=>'ME','EE'=>'EE','EXTC'=>'EXTC','CE'=>'CE'],'',['class'=>'form-control','placeholder'=>$student->branch]) !!}
        </div>
        <div class="form-group col-4">
                {{Form::label('year', 'Year')}}
                {!! Form::select('year',['FE' => 'FE','SE'=>'SE','TE'=>'TE','BE'=>'BE'],'',['class'=>'form-control','placeholder'=>$student->year]) !!}
            </div>
        <div class="form-group col-4">
            {{Form::label('phone', 'Phone')}}
            {{Form::text('phone', $student->phone, ['class' => 'form-control', 'placeholder' => 'Phone'])}}
        </div>
        <div class="form-group col-4">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $student->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
            {{Form::hidden('_method', 'PUT')}} 
        </div>
        

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection
