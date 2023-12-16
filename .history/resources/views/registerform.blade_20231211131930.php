@extends('welcome')
@section('content')
<div class="container">
    <h1>Register form</h1>
    {{-- @if (session('loginfail'))
      {{session('loginfail')}}
    @endif --}}
    <form action="" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputPassword1">username</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="username" required>
      </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
        @endsection