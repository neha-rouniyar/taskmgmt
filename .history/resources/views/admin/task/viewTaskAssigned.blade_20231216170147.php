@extends('admin.dashboard')
@section('admin-content')
<style>
  .my-custom-heading {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
    }

    .my-custom-alert {
        margin-bottom: 20px;
    }

    .my-custom-form {
        margin-bottom: 30px;
    }

    .my-custom-label {
        font-size: 16px;
        color: #555;
    }

    .my-custom-input {
        width: 50%;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 20px;
    }

    .my-custom-btn {
        width: 100px;
    }
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
    <h1 style="text-align: center" class="mt-4">Assigned Tasks List</h1>
    @if (session('update'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p style="color: rgb(0, 128, 30)8, 28, 0)">{{session('update')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
    @endif
    {{-- update --}}
    <table class="table mt-4">
        <thead>
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Task Heading</th>
            <th scope="col">Assigned To</th>
            <th scope="col">Assigned Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($data as $items )
          <tr>
            <th>{{$i++}}</th>
            <td>{{$items->task_id}}</td>
            <td>{{$items->user_id}}</td>
            <td>{{$items->created_at}}</td>
            <td>
                <a href="{{route('assignTask.edit',$items->id)}}"><button style="width: 20%" type="button" class="btn btn-primary">Edit</button></a>
                <a href="{{route('assignTask.delete',$items->id)}}"><button style="width: 30%" type="button" class="btn btn-danger">Delete</button></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection