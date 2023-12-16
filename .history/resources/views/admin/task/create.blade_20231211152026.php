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
    width: 100%;
    padding: 10px;
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