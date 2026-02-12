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
     <?php foreach($pokeballs as $item) {?>
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