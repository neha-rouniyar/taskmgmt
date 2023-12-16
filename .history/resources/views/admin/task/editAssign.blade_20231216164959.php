@extends('admin.dashboard')
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

    /* Center-align the labels */
    .center-align-label {
        text-align: center;
    }

    /* Center-align the button */
    .center-align-button {
        display: flex;
        justify-content: center;
    }
</style>
<div class="container">
    <h1 class="text-center" style="margin-top: 4%">Edit Assigned Task</h1>
    <form action="" method="POST">
        @csrf
        <div class="form-group center-align-label">
            <label for="assignee">Select Task</label>
            <div class="custom-dropdown">
                <select name="task" id="task" class="custom-select">
                    @foreach ($task as $tasks)
                        <option value="{{$tasks->id}}">{{$tasks->task_heading}}</option>
                    @endforeach
                </select>
                <div class="custom-dropdown-arrow"></div>
            </div>
        </div>
        <div class="form-group center-align-label">
            <label for="assignee">Assign To:</label>
            <div class="custom-dropdown">
                <select name="user" id="user" class="custom-select">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->username}}</option>
                    @endforeach
                </select>
                <div class="custom-dropdown-arrow"></div>
            </div>
        </div>
        <div class="center-align-button">
           
           
            <button type="submit" class="btn btn-success">Assign</button>

        </div>
    </form>
</div>
@endsection
