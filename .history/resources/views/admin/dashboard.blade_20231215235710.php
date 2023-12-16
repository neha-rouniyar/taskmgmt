<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .btn-container {
            display: flex;
            flex-direction: row;
            gap: 10px;
            justify-content: center;
        }

        .btn-container a {
            text-decoration: none;
        }

        .btn {
            width: 70px;
            height: 70px;
            border: 1px solid #007bff;
            background-color: #007bff;
            color: #fff;
            border-radius: 5%;
            transition: background-color 0.3s, color 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Hello, world!</title>
</head>
<body>
    <div class="container text-center">
        <h1>Welcome Admin</h1>
        <div class="btn-container">
            <a href="{{route('admin.create.task')}}">
                <button type="button" class="btn btn-primary">Create Task</button>
            </a>
            <a href="{{route('admin.view.users')}}">
                <button type="button" class="btn btn-primary">View Users</button>
            </a>
            <a href="{{route('admin.view.workprogress')}}">
                <button type="button" class="btn btn-primary">Work Progress</button>
            </a>
            <a href="{{route('admin.task.assign')}}">
                <button type="button" class="btn btn-primary">Assign Task</button>
            </a>
        </div>
    </div>
    @yield('admin-content')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
