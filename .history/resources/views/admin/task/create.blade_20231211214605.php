@extends('admin.dashboard');
@section('admin-content')
<style>
    .form-group {
    margin-bottom: 20px;
}

.custom-dropdown {
    position: relative;
    width: 100%;
}

.custom-select {
    width: 50%;
    /* padding: 10px; */
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    appearance: none;
    background-color: #fff;
    cursor: pointer;
}

.custom-dropdown-arrow {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    border: solid #555;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    transition: transform 0.3s ease-in-out;
}

.custom-select:focus + .custom-dropdown-arrow {
    transform: translateY(-50%) rotate(-45deg);
}

/* Style for the dropdown options */
.custom-select option {
    padding: 10px;
}

</style>
<div class="container">
    <h1>Create Task</h1>
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
<form action="{{route('admin.task.submit')}}" method="POST">
    @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Task Heading</label>
        <input style="width: 50%" type="text" name="heading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Task Heading" required>
      </div>
      {{-- <div class="form-group">
        <label for="assignee">Assign To:</label>
        <div class="custom-dropdown">
            <select name="assignee" id="assignee" class="custom-select">
                @foreach ($users as $data)
                    <option value="{{$data->id}}">{{$data->username}}</option>
                @endforeach
            </select>
            <div class="custom-dropdown-arrow"></div>
        </div>
    </div> --}}
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
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
              
            @endif
          <tr>
            <th>{{$i++}}</th>
            <td>{{$data->task_heading}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->created_at}}</td>
            <td>
                <a href="{{route('task.edit',$data->id)}}"><button style="width: 20%" type="button" class="btn btn-primary">Edit</button></a>
                <a href="{{route('task.delete',$data->id)}}"><button style="width: 30%" type="button" class="btn btn-danger">Delete</button></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection