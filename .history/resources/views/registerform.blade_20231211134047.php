@extends('welcome')
@section('content')
<div class="container">
    <h1>Register form</h1>
    @if (session('msg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p style="color: green">{{session('msg')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    @if (session('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p style="color: rgb(128, 17, 0)8, 28, 0)">{{session('message')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
    @endif
    <form action="{{route('register.form.submit')}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username" required>
          </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
        @endsection