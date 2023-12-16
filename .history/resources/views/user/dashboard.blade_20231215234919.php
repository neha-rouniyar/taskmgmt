<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }

        h1, h2 {
            margin-bottom: 20px;
            color: #007bff;
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

        .alert p {
            color: rgb(20, 216, 20);
            margin-bottom: 0;
        }

        .table {
            background-color: #ffffff;
        }

        th, td {
            text-align: center;
        }

        .btn-group {
            display: flex;
            justify-content: space-around;
        }

        .btn-group button {
            width: 48%;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="btn-container">
            <h1>Hello {{$user->username}}</h1>

            @if (session('accepted') || session('complete') || session('rejected'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    @if (session('accepted'))
                        <p>{{session('accepted')}}</p>
                    @endif

                    @if (session('complete'))
                        <p>{{session('complete')}}</p>
                    @endif

                    @if (session('rejected'))
                        <p>{{session('rejected')}}</p>
                    @endif

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <h2>Assigned Tasks</h2>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Task Name</th>
                        <th scope="col">Assigned Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach ($user->assignedTasks as $assignedTask)
                        @if ($assignedTask->status==0)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$assignedTask->task->task_heading}}</td>
                                <td>{{$assignedTask->created_at}}</td>
                                <td class="btn-group">
                                    <a href="{{route('accept.task',$assignedTask->id)}}">
                                        <button type="button" class="btn btn-primary">Accept</button>
                                    </a>
                                    <a href="{{route('reject.task',$assignedTask->id)}}">
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>

            <h2>Ongoing Tasks</h2>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Task Name</th>
                        <th scope="col">Assigned Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach ($user->assignedTasks as $assignedTask)
                        @if ($assignedTask->status=='accepted')
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$assignedTask->task->task_heading}}</td>
                                <td>{{$assignedTask->created_at}}</td>
                                <td>
                                    <a href="{{route('task.complete',$assignedTask->id)}}">
                                        <button type="button" class="btn btn-success">Mark as Complete</button>
                                    </a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
