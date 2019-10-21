@extends('layouts.myapp')

@section('content')

 <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 stdform mt-5">

        <h2>Assignment No.{{$assignment->id}}</h2>
        
        <div class="card my-3 p-3">
            
            <h1> {{$assignment->title}} </h1> 
            <h4> {{$assignment->body}} </h4>
            <h4> {{$assignment->classyear}} </h4>
        </div>
        </div>
                <div class="col-md-2"></div>

    </div>
@endsection