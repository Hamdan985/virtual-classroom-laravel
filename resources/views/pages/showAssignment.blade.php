@extends('layouts.myapp')

@section('content')

 <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 stdform mt-5">

        <h2>Assignment No.{{$assignment->id}}</h2>
        
        <div class="card my-3 p-3">
            
            <h1> {{$assignment->title}} </h1> 
            <h4> {{$assignment->body}} </h4>
            <h6> {{$assignment->branch}} {{$assignment->year}}</h6>
            
        </div>

        <a class="btn btn-primary" href="/assignment"> Back </a>
        @if(!Auth::check() == False) 
        <a class="btn btn-primary" href="/assignment/{{$assignment->id}}/edit"> Edit </a>                
        @endif

        @if(!Auth::check() == False)
            {!!Form::open(['action' => ['AssignmentsController@destroy', $assignment->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
        </div>
                <div class="col-md-2"></div>

    </div>
@endsection