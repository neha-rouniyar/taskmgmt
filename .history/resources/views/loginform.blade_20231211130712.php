@extends('welcome')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    .login-container h2 {
        margin-bottom: 20px;
    }

    .login-label {
        display: block;
        margin-bottom: 8px;
    }

    .login-input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .login-submit {
        background-color: #4caf50;
        color: #fff;
        cursor: pointer;
        padding: 10px;
        border: none;
        border-radius: 4px;
    }

    .login-submit:hover {
        background-color: #45a049;
    }
</style>
<div class="login-container">

    <h2>Login</h2>

    <!-- Login Form -->
    <form id="login-form">
        <label for="login-username" class="login-label">Username:</label>
        <input type="text" id="login-username" name="login-username" class="login-input" required>

        <label for="login-password" class="login-label">Password:</label>
        <input type="password" id="login-password" name="login-password" class="login-input" required>

        <button type="submit" class="login-submit">Login</button>
    </form>

</div>
        @endsection