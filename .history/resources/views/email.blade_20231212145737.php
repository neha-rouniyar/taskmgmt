<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site </h2>
{{-- @dd($datas) --}}
<p>Please Click on this link to verofy your email</p>
<p>Please click on the following link to verify your email:</p>
<a href="{{ route('verify.email', ['token' => $token]) }}">Verify Email</a>
</body>

</html>