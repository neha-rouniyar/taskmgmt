@extends('admin.dashboard');
@section('admin-content')

<h1>Create Task</h1>
<form action="" method="POST">
    @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Task Heading</label>
        <input type="text" name="heading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Task Heading" required>
      </div>
      <div class="form-group">
        <label for="assignee">Assign To:</label>
        <div class="custom-dropdown">
            <select name="assignee" id="assignee" class="custom-select">
                @foreach ($users as $data)
                    <option value="{{$data->id}}">{{$data->username}}</option>
                @endforeach
            </select>
            <div class="custom-dropdown-arrow"></div>
        </div>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection