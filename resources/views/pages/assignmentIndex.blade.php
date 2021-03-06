@extends('layouts.myapp')

@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 stdform mt-5">

        <h2>Student Assignments</h2><hr>


        @if(count($assignments) > 0 )
            @foreach ($assignments as $assignment)
                <div class="card my-3 p-3">
                    
                    <h2> <a class="ass" href="/assignment/{{$assignment->id}}">{{$assignment->title}} </a> <span class="float-right mt-2" style="font-size:20px;"> {{$assignment->year}} {{$assignment->branch}} </span> </h2> 
                    
                </div>
            @endforeach
        @else
            <h2>No Assignments Available</h2>
        @endif
        </div>
        <div class="col-md-2"></div>

    </div>
@endsection