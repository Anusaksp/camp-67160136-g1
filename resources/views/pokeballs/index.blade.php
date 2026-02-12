@extends('template.default')

@section('content')
    <h1>Pokedex</h1>
    <form action="{{ url('/pokeballs') }}" method="post">
        @csrf
        <label>Type</label>
        <input class="form-control" type="text" name="type">

        <label>Species</label>
        <input class="form-control" type="text" name="species">

        <label>Height</label>
        <input class="form-control" type="number" name="height">

        <label>Weight</label>
        <input class="form-control" type="number" name="weight">

        <label>Hp</label>
        <input class="form-control" type="number" name="hp">

        <label>Attack</label>
        <input class="form-control" type="number" name="attack">

        <label>Defense</label>
        <input class="form-control" type="number" name="defense">

        <label>Image_url</label>
        <input class="form-control" type="text" name="image_url">

        <button class="btn btn-primary">บันทึก</button>
    </form>

    @include('pokeballs.table', ['pokeballs' => $pokeballs])

@endsection