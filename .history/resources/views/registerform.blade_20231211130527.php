@extends('welcome')
@section('content')

        <div class="container">
        <h1>Register Form</h1>
        <form action="{{route('register.submit')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Full Name</label>
              <input type="text" value="{{old('fullname')}}" class="form-control" id="exampleInputEmail1" name="fullname" aria-describedby="emailHelp" placeholder="Enter Full Name">
              @error('fullname')
              <p style="color: red">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Pick a Username</label>
              <input name="username" value="{{old('username')}}" type="text" class="form-control" placeholder="Username">
              @error('username')
              <p style="color: red">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" placeholder="Password">
                @error('password')
                <p style="color: red">{{$message}}</p>
              @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Date of Birth</label>
                <input name="dob" value="{{old('dob')}}" type="date" class="form-control" >
                @error('dob')
                <p style="color: red">{{$message}}</p>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
        @endsection