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
        <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">S.N</th>
                <th scope="col">TaskName</th>
                <th scope="col">Assigned Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($assignedTask as $data )
              <tr>
                <th>{{$i++}}</th>
                {{-- <th>task 4</th> --}}
                <td>{{$data->assignedTask->task_heading}}</td>
                <td>{{$data->created_at}}</td>
                <td>                 
                        <button style="width: 30%" type="button" class="btn btn-primary">Accept</button>
                        <button style="width: 30%" type="button" class="btn btn-danger">Reject</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</body>
</html>