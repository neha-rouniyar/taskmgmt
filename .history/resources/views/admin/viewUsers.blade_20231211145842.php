@extends('admin.dashboard');
@section('admin-content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">S.N</th>
        <th scope="col">UserName</th>
        <th scope="col">Email</th>
        <th scope="col">UserType</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $data )
      <tr>
        <th>1</th>
        <td>{{$data->email}}</td>
        <td>{{$data->email}}</td>
        <td>@{{$data->email}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection