@extends('template.default')

@section('content')
    <h1>Flight Update</h1>
    <form action="{{ url('/pokeballs/'.$pokeball_update->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="type">Type</label>
        <input class="form-control" type="text" name="type" id="type" >
        <label for="species">Species</label>
        <input class="form-control" type="text" name="species" id="species" >
        <label for="height">Height</label>
        <input class="form-control" type="number" name="height" id="height" >
        <label for="weight">Weight</label>
        <input class="form-control" type="number" name="weight" id="weight" >
        <label for="hp">Hp</label>
        <input class="form-control" type="number" name="hp" id="hp" >
        <label for="attack">Attack</label>
        <input class="form-control" type="number" name="attack" id="attack" >
        <label for="defense">Defense</label>
        <input class="form-control" type="number" name="defense" id="defense" >
        <label for="image_url">Image_url</label>
        <input class="form-control" type="text" name="image_url" id="image_url" >
        

        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
    <h1>Pokemon Lists</h1>
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>type</td>
                <td>species</td>
                <td>height</td>
                <td>weight</td>
                <td>hp</td>
                <td>attack</td>
                <td>defense</td>
                <td>image_url</td>
                <td></td>
            </tr>
        </thead>
        <?php foreach($pokeball as $item) {?>
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->type}}</td>
                <td>{{ $item->species}}</td>
                <td>{{ $item->height}}</td>
                <td>{{ $item->weigh}}</td>
                <td>{{ $item->hp}}</td>
                <td>{{ $item->attack}}</td>
                <td>{{ $item->defense}}</td>
                <td>{{ $item->image_url}}</td>
                <td>
                    <a class="btn btn-warning" href="{{ url('/pokeballs/'.$item->id.'/edit') }}">
                        แก้ไข
                    </a>
                    <form
                        style="display:inline-block"
                        action="{{ url('/pokeballs/'.$item->id)}}" method = "post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">ลบ</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
    </table>
@endsection
