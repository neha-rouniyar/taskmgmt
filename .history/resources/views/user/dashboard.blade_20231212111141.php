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

        <h1>hello {{$user->username}}</h1>
        <div class="btn-container">
            <a href="{{route('admin.create.task')}}">
                <button type="button" class="btn btn-primary">Create Task</button>
            </a>
            <a href="{{route('admin.view.users')}}">
                <button type="button" class="btn btn-primary">View users</button>
            </a>
            <a href="{{route('admin.view.workprogress')}}">
                <button type="button" class="btn btn-primary">View Work Progress</button>
            </a>
            <a href="{{route('admin.task.assign')}}">
                <button type="button" class="btn btn-primary">Assign Task</button>
            </a>
        </div>
    </div>
</body>
</html>