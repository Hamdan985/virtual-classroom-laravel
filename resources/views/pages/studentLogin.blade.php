@extends('layouts.myapp')

@section('content')

  <div class="row">
  <div class="col-md-4"></div>
    <form class="col-md-4 mt-5 stdform" method="POST" action="{{route('student.login')}}">
    @csrf
      <h2>Student Login</h2><hr>

  <div class="form-group">
    <label for="username">Username:</label>
    <input type="username" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-default btn-primary">Submit</button>
  </form>

    <div class="col-md-4"></div>

  </div>
@endsection

