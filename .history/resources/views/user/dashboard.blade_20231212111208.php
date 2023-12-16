<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <div class="btn-container">
        <h1>hello {{$user->username}}</h1>
            <a href="{{route('user.view.assign')}}">
                <button type="button" class="btn btn-primary">View Task Assigned</button>
            </a>
        </div>
    </div>
</body>
</html>