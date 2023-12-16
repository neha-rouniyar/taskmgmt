@extends('admin.dashboard');
@section('admin-content')
<div class="container"></div>
<table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">S.N</th>
        <th scope="col">UserName</th>
        <th scope="col">Email</th>
        <th scope="col">UserType</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($users as $data )
      <tr>
        <th>{{$i++}}</th>
        <td>{{$data->username}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->usertype}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection