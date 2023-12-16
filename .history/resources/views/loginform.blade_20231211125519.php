<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
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

    .form-outline {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    .form-control {
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

    .text-center a {
        color: #007bff;
        text-decoration: none;
    }

    .text-center a:hover {
        text-decoration: underline;
    }

    /* Error message styling */
    .error-message {
        color: red;
        margin-top: 5px;
        font-size: 14px;
    }

</style>

</head>
<body>

<form action="" method="POST" class="container">
    @csrf
    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example1">Email address</label>
        <input name="email" type="email" id="form2Example1" class="form-control" />
        {{-- @error('email')
        <p style="color: red">{{$message}}</p>
        @enderror --}}
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Password</label>
        <input name="password" type="password" id="form2Example2" class="form-control" />
        {{-- @error('password')
        <p style="color: red">{{$message}}</p>
        @enderror --}}
    </div>

    <!-- 2 column grid layout for inline styling -->
    {{-- <div class="row mb-4">
        <div class="col d-flex justify-content-center">
        </div>
    </div> --}}

    <button type="submit" class="btn btn-primary btn-block mb-3">Login</button>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Not a member? <a href="register">Register</a></p>
    </div>
</form>
</body>
</html>