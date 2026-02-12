@extends('template.default')

@section('content')
    <h1>Flight Update</h1>
    <form action="{{ url('/flights/'.$flight_update->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" value="{$flight_update->name}">
        <label for="airline">Airline</label>
        <input class="form-control" type="text" name="airline" id="airline" value="{$flight_update->airlin}">
        <label for="number_of_seats">Number_of_Seats</label>
        <input class="form-control" type="number" name="number_of_seats" id="number_of_seats" value="{$flight_update->id}">
        <label for="price">Price</label>
        <input class="form-control" type="decimal" name="price" id="price"value="{$flight_update->price}">
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
     <h1>Flights Lists</h1>
    <table class="table">
        <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>airline</td>
            <td>number_of_seats</td>
            <td>price</td>
            <td></td>
        </tr>
        </thead>
        <?php foreach($flight as $item) {?>
        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->airline}}</td>
            <td>{{ $item->number_of_sears}}</td>
            <td>{{ $item->price}}</td>
            <td>
                <a href="{{ url('/flights/'.$item->id.'/edit') }}">
                    แก้ไข
                </a>
                 / ลบ</td>
        </tr>
        <?php } ?>

    </table>
@endsection
