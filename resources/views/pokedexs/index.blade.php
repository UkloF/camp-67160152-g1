@extends('template.default')

@section('content')
    <h1>Pokedex Create</h1>
    <form action="{{ url('/pokedexs') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name">

        <lable for="type">Type</lable>
        <input class="form-control" type="text" name="type" id="type">

        <lable for="species">Species</lable>
        <input class="form-control" type="text" name="species" id="species">

        <lable for="height">Height&lpar;cm&rpar;</lable>
        <input class="form-control" type="number" name="height" id="height">

        <lable for="weight">Weight&lpar;kg&rpar;</lable>
        <input class="form-control" type="number" name="weight" id="weight">

        <lable for="hp">Hp</lable>
        <input class="form-control" type="number" step="any" name="hp" id="hp">

        <lable for="attack">Attack</lable>
        <input class="form-control" type="number" step="any" name="attack" id="attack">

        <lable for="defense">Defense</lable>
        <input class="form-control" type="number" step="any" name="defense" id="defense">

        <lable for="image_url">Image_url</lable>
        <input class="form-control" type="text" name="image_url" id="image_url">

        <button class="btn btn-success">บันทึก</button>
    </form>
    @include('pokedexs.table')
@endsection
