@extends('layouts.myapp')

@section('content')
        <h1>IN ASSIGNMENT CREATE</h1>

        <div class="container">
        {!! Form::open(['action' => 'AssignmentsController@store', 'method' => 'POST'])  !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        <div class="form-group col-4">
               {{Form::label('branch', 'Branch')}}
               {!! Form::select('branch',['CO' => 'CO','ME'=>'ME','EE'=>'EE','EXTC'=>'EXTC','CE'=>'CE'],'',['class'=>'form-control','placeholder'=>'Select Branch']) !!}
        </div>
        <div class="form-group col-4">
            {{Form::label('year', 'Year')}}
            {!! Form::select('year',['FE' => 'FE','SE'=>'SE','TE'=>'TE','BE'=>'BE'],'',['class'=>'form-control','placeholder'=>'Select Year']) !!}
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
    </div>
                          
@endsection