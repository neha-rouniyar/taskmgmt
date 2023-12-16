@extends('admin.dashboard');
@section('admin-content')
<style>
  .form-group {
      margin-bottom: 20px;
  }

  .custom-select {
      width: 50%;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
      appearance: none;
      background-color: #fff;
      cursor: pointer;
  }

 

  .custom-select:focus + .custom-dropdown-arrow {
      transform: translateY(-50%) rotate(-45deg);
  }

  /* Style for the dropdown options */
  .custom-select option {
      padding: 10px;
  }

  Adjustments for centering
  .container {
      display: flex;
      flex-direction: column;
      align-items: center;
  }

  h1 {
      margin-bottom: 20px;
  }

  form {
      width: 50%; /* Adjust the width as needed */
  }
</style>
<div class="container">
    <h1 style="text-align: center; margin-top: 30px"  >All Tasks</h1>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p style="color: rgb(11, 130, 43)8, 28, 0)">{{session('success')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
    @endif
    @if (session('update'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p style="color: rgb(0, 128, 30)8, 28, 0)">{{session('update')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
    @endif
    @if (session('delete'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p style="color: rgb(0, 128, 30)8, 28, 0)">{{session('delete')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
    @endif

    <table class="table mt-4">
        <thead>
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Task Heading</th>
            <th scope="col">Status</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($tasks as $data )
            @if ($data->status==0)
          <tr>
            <th>{{$i++}}</th>
            <td>{{$data->task_heading}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->created_at}}</td>
            <td>
                <a href=""><button data-toggle="modal" data-target="#exampleModal" style="width: 20%" type="button" class="btn btn-primary">Edit</button></a>
                <a href="{{route('task.delete',$data->id)}}"><button data-toggle="modal" data-target="#exampleModal" style="width: 30%" type="button" class="btn btn-danger">Delete</button></a>
            </td>
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Task</h5>
              
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" name="heading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Task Heading" required>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection