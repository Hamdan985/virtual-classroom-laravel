@extends('layouts.myapp')

@section('content')
        <h1>IN ASSIGNMENT EDIT</h1>

        <div class="container">
        {!! Form::open(['action' => ['AssignmentsController@update', $assignment->id], 'method' => 'POST'])  !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $assignment->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $assignment->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        <div class="form-group col-4">
               {{Form::label('branch', 'Branch')}}
               {!! Form::select('branch',['CO' => 'CO','ME'=>'ME','EE'=>'EE','EXTC'=>'EXTC','CE'=>'CE'],'',['class'=>'form-control','placeholder'=>$assignment->branch]) !!}
        </div>
        <div class="form-group col-4">
            {{Form::label('year', 'Year')}}
            {!! Form::select('year',['FE' => 'FE','SE'=>'SE','TE'=>'TE','BE'=>'BE'],'',['class'=>'form-control','placeholder'=>$assignment->year]) !!}
        </div>
        {{Form::hidden('_method', 'PUT')}} 
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
    </div>
                          
@endsection
