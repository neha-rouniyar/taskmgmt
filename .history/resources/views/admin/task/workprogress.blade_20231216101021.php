@extends('admin.dashboard');
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js"></script>
@section('admin-content')

<h1>work progress</h1>
<form action="{{url('slider')}}">
<div class="container mt-5">
    <label for="rangeSlider">Select a value:</label>
    <input type="range" class="custom-range" id="rangeSlider" name="rangeValue" min="0" max="100" step="1" value="50">
    <p id="selectedValue">Selected Value: 50</p>
</div>
</form>


<script>
    // Get the range slider element
    var rangeSlider = document.getElementById('rangeSlider');
    
    // Get the element to display the selected value
    var selectedValue = document.getElementById('selectedValue');

    // Update the selected value when the range slider value changes
    rangeSlider.addEventListener('input', function () {
        selectedValue.innerText = 'Selected Value: ' + rangeSlider.value;
    });
</script>

@endsection