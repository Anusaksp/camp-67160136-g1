@extends('template.default')

@section('title','Pokedex')
@section('header','Pokedex')

@section('content')
<h1>Pokedex</h1>

<form action="/mycontroller" method="POST" enctype="multipart/form-data" novalidate>
@csrf
<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label for="fname">ชื่อ</label>
    </div>
    <div class="col">
        <input id="fname" name="first_name" class="form-control" required>
        <div class="valid-feedback">ถูกต้อง</div>
        <div class="invalid-feedback">โปรดระบุชื่อ</div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label for="lname">สกุล</label>
    </div>
    <div class="col">
        <input id="lname" name="last_name" class="form-control" required>
        <div class="invalid-feedback">โปรดระบุนามสกุล</div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label for="dob">วัน/เดือน/ปีเกิด</label>
    </div>
    <div class="col">
        <input id="dob" name="date_of_birth" type="date" class="form-control" required>
        <div class="invalid-feedback">โปรดระบุวันเกิด</div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label for="age">อายุ</label>
    </div>
    <div class="col">
        <input id="age" name="age" type="number" class="form-control" required>
        <div class="invalid-feedback">โปรดระบุอายุ</div>
    </div>
</div>

<div class="row mt-3 align-items-center">
    <div class="col-sm-12 col-md-4">
        <label class="form-label mb-0">เพศ</label>
    </div>
    <div class="col">
        <div class="d-flex gap-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender_male" value="male" required>
                <label class="form-check-label" for="gender_male">ชาย</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender_female" value="female" required>
                <label class="form-check-label" for="gender_female">หญิง</label>
            </div>
        </div>

        <div class="invalid-feedback d-block">
            โปรดเลือกเพศ
        </div>
    </div>
</div>


<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label for="profilePic">รูป</label>
    </div>
    <div class="col">
        <input class="form-control" type="file" id="profilePic" name="profile_picture" >
        {{-- <div class="invalid-feedback">โปรดเลือกรูป</div> --}}
    </div>
</div>


<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label for="address">ที่อยู่</label>
    </div>
    <div class="col">
        <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
        <div class="invalid-feedback">โปรดระบุที่อยู่</div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label for="favColor">สีที่ชอบ</label>
    </div>
    <div class="col">
        <input type="text" class="form-control" id="favColor" name="favorite_color" placeholder="เช่น แดง น้ำเงิน เขียว" required>
        <div class="invalid-feedback">โปรดระบุสีที่ชอบ</div>
    </div>
</div>


<div class="row mt-3 align-items-center">
    <div class="col-sm-12 col-md-4">
        <label class="form-label mb-0">แนวเพลงที่ชอบ</label>
    </div>
    <div class="col">
        <div class="d-flex flex-wrap gap-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="music_genre" id="music_life" value="for_life" required>
                <label class="form-check-label" for="music_life">เพื่อชีวิต</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="music_genre" id="music_country" value="country" required>
                <label class="form-check-label" for="music_country">ลูกทุ่ง</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="music_genre" id="music_other" value="other" required>
                <label class="form-check-label" for="music_other">อื่นๆ</label>
            </div>
        </div>

        <div class="invalid-feedback d-block">
            โปรดเลือกแนวเพลง
        </div>
    </div>
</div>


<div class="row mt-4">
    <div class="col-sm-12 col-md-4"></div>
    <div class="col">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="consent" name="data_consent" required>
            <label class="form-check-label" for="consent">ยินยอมให้เก็บข้อมูล</label>
            <div class="invalid-feedback">ต้องยินยอมก่อนส่งข้อมูล</div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col d-flex justify-content-center">
        <button type="reset" class="btn btn-light">Reset</button>
    </div>
    <div class="col d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</div>
@endsection

@push('scripts')
<script>
(() => {
    'use strict';

    const form = document.querySelector('form');
    if (!form) return;

    form.addEventListener('submit', (event) => {
        const isValid = form.checkValidity();

        if (!isValid) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    });
})();


let myfunc = (callback) => {
    callback("in Callback")
}

let callMe = (param) => {
    console.log(param)
}

myfunc(callMe)

let myvar1 = 1
let myvar2 = "1"
myvar2 = parseInt(myvar2)

console.log(myvar2 + myvar1)
console.log(1 === '1')
</script>
@endpush
