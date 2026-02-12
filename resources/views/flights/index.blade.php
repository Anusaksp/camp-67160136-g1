@extends('template.default')

@section('content')
    <h1>Flight Create</h1>

    <form action="{{ url('/flights') }}" method="post">
        @csrf
        <label>Name</label>
        <input class="form-control" type="text" name="name">

        <label>Airline</label>
        <input class="form-control" type="text" name="airline">

        <label>Number of seats</label>
        <input class="form-control" type="number" name="number_of_seats">

        <label>Price</label>
        <input class="form-control" type="number" name="price">

        <button class="btn btn-primary">บันทึก</button>
    </form>

    @include('flights.table', ['flight' => $flight])
@endsection
