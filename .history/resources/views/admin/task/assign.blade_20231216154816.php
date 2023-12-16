@extends('admin.dashboard');
@section('admin-content')
<style>
    .form-group {
        margin-bottom: 20px;
    }

    .custom-dropdown {
        position: relative;
        width: 50%; /* Adjust the width as needed */
        margin: 0 auto; /* Center the element */
    }

    .custom-select {
        width: 100%;
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

    /* Center-align labels */
    .center-label {
        display: flex;
        justify-content: center;
    }
</style>
<div class="container">
    <h1 class="text-center">Create Task</h1>
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p style="color: rgb(0, 0, 0)">{{session('message')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    @if (session('assign'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p style="color: rgb(11, 130, 43)8, 28, 0)">{{session('assign')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <form action="{{route('admin.task.assign.submit')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="assignee" class="center-label">Select Task</label>
            <div class="custom-dropdown">
                <select name="task" id="task" class="custom-select">
                    @foreach ($task as $tasks)
                        <option value="{{$tasks->id}}">{{$tasks->task_heading}}</option>
                    @endforeach
                </select>
                <div class="custom-dropdown-arrow"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="assignee" class="center-label">Assign To:</label>
            <div class="custom-dropdown">
                <select name="user" id="user" class="custom-select">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->username}}</option>
                    @endforeach
                </select>
                <div class="custom-dropdown-arrow"></div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="text-align: center">Assign</button>
    </form>
</div>
@endsection
