@extends('welcome')
@section('content')
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