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
            
        @endforeach
      <tr>
        <th>1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>

@endsection