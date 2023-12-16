@extends('admin.dashboard');
@section('admin-content')

<h1>work progress</h1>
<div class="container mt-5">
    <label for="rangeSlider">Select a value:</label>
    <input type="range" class="custom-range" id="rangeSlider" min="0" max="100" step="1" value="50">
    <p id="selectedValue">Selected Value: 50</p>
</div>


@endsection