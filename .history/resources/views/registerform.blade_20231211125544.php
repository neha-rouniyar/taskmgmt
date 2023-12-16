<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .btn-primary {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: 5px;
            font-size: 14px;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Register Form</h1>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" value="{{old('fullname')}}" class="form-control" id="exampleInputEmail1" name="fullname" aria-describedby="emailHelp" placeholder="Enter Full Name">
            {{-- @error('fullname')
            <p style="color: red">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="Address">Address</label>
            <input name="address" value="{{old('address')}}" type="text" class="form-control" placeholder="Address">
            {{-- @error('address')
            <p style="color: red">{{$message}}</p>
            @enderror --}}
        </div>
        <div class="form-group">
            <label for="Contact">Contact</label>
            <input name="contact" type="number"  value="{{old('contact')}}" class="form-control" placeholder="Contact">
            {{-- @error('contact')
            <p style="color: red">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input name="email" type="email" value="{{old('email')}}" class="form-control" placeholder="email">
            {{-- @error('email')
            <p style="color: red">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" value="{{old('fullname')}}" type="password" class="form-control" placeholder="Password">
            {{-- @error('password')
            <p style="color: red">{{$message}}</p>
            @enderror --}}
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>