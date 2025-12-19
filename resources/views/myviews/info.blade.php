@extends('template.default')
@section('title', 'ตารางแม่สูตรคูณ')
@section('content')
    <form action="/calculate" method="post">
        @csrf
        <?php// echo $_get isset(['mynumber']) ? $_get ['mynumber'] :"";?>
        <input class="form-control" name="mynumber" type="number">
        <br>
        <button class="btn btn-success">บันทึก</button>
    </form>

@endsection
