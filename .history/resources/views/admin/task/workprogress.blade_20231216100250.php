@extends('admin.dashboard');
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
@section('admin-content')

<h1>work progress</h1>
<div class="container mt-5">
    <label for="rangeSlider">Select a value:</label>
    <input type="range" class="custom-range" id="rangeSlider" min="0" max="100" step="1" value="50">
    <p id="selectedValue">Selected Value: 50</p>
</div>


@endsection