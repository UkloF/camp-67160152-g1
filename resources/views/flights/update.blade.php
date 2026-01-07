@extends('template.default')

@section('content')
    <h1>Flight update</h1>
    <form action="{{ url('/flights/'.$flight_update->id) }}" method="post">
        @csrf
        @method('PUT')
        <lable for="name">Name</lable>
        <input class="form-control" type="text" name="name" id="name" value="{{$flight_update->name}}">

        <lable for="airline">Airline</lable>
        <input class="form-control" type="text" name="airline" id="airline" value="{{$flight_update->airline}}">

        <lable for="num_seat">Number of seats</lable>
        <input class="form-control" type="text" name="number_of_seats" id="num_seat" value="{{$flight_update->number_of_seats}}">

        <lable for="price">Price</lable>
        <input class="form-control" type="text" name="price" id="price" value="{{$flight_update->price}}">

        <button class="btn btn-success">บันทึก</button>
    </form>
    @include('flights.table')
@endsection
