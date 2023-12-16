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
        <label for="exampleInputPassword1">Assign To:</label>
            <select name="assignee" id="assignee">
                @foreach ($users as $data )
                <option value="">{{$data->username}}</option>       
                @endforeach
            </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection