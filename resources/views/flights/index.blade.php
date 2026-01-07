@extends('template.default')

@section('content')
    <h1>Flight Create</h1>
    <form action="{{ url('/flights') }}" method="post">
        @csrf
        <lable for="name">Name</lable>
        <input class="form-control" type="text" name="name" id="name">

        <lable for="airline">Airline</lable>
        <input class="form-control" type="text" name="airline" id="airline">

        <lable for="num_seat">Number of seats</lable>
        <input class="form-control" type="number" name="number_of_seats" id="number_of_seats">

        <lable for="price">Price</lable>
        <input class="form-control" type="decimal" name="price" id="price">

        <button class="btn btn-success">บันทึก</button>
    </form>
    @include('flights.table')
@endsection
