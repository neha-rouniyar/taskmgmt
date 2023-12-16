<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            padding: 20px;
        }
  
        h1 {
            margin-bottom: 20px;
        }
  
        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
  
        .btn-container a {
            text-decoration: none;
        }
  
        .btn {
            width: 200px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">

        <div class="btn-container">
        <h1>hello {{$user->username}}</h1>
            <a href="{{route('user.view.assigned.task')}}">
                <button type="button" class="btn btn-primary">View Task Assigned</button>
            </a>
        </div>
    </div>
</body>
</html>