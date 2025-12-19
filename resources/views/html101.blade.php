@extends('template.default')

@section('title','Workshop')

@section('content')
<h1>Workshop #HTML - FORM</h1>

<form action="#" method="POST" enctype="multipart/form-data" novalidate>
    @csrf

    {{-- ชื่อ --}}
    <div class="row mt-3 align-items-center">
        <div class="col-sm-12 col-md-4 form-label-col">
            <label for="fname" class="form-label">ชื่อ</label>
        </div>
        <div class="col">
            <input id="fname" name="first_name" type="text" class="form-control" required>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุชื่อ</div>
        </div>
    </div>

    {{-- สกุล --}}
    <div class="row mt-3 align-items-center">
        <div class="col-sm-12 col-md-4 form-label-col">
            <label for="lname" class="form-label">สกุล</label>
        </div>
        <div class="col">
            <input id="lname" name="last_name" type="text" class="form-control" required>
            <div class="invalid-feedback">โปรดระบุนามสกุล</div>
        </div>
    </div>

    {{-- วันเกิด --}}
    <div class="row mt-3 align-items-center">
        <div class="col-sm-12 col-md-4 form-label-col">
            <label for="dob" class="form-label">
                วัน/เดือน/ปีเกิด <small class="text-muted">(dd/mm/yyyy)</small>
            </label>
        </div>
        <div class="col">
            <input id="dob" name="date_of_birth" type="date" class="form-control" required>
            <div class="invalid-feedback">โปรดระบุ วัน/เดือน/ปีเกิด</div>
        </div>
    </div>

    {{-- อายุ --}}
    <div class="row mt-3 align-items-center">
        <div class="invalid-feedback">โปรดระบุอายุ</div>
        <div class="col-sm-12 col-md-4 form-label-col">
        </div>
        <div class="col">
            <input
                id="age"
                name="age"
                type="number"
                class="form-control text-center"
                min="0"
                max="999"
                required
            >
            <label for="age" class="form-label">อายุ</label>
        </div>
    </div>

    {{-- เพศ --}}
    <div class="row mt-3 align-items-center">
        <div class="col-sm-12 col-md-4 form-label-col">
            <label class="form-label">เพศ</label>
        </div>
        <div class="col">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male" required>
                <label class="form-check-label" for="genderMale">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female" required>
                <label class="form-check-label" for="genderFemale">หญิง</label>
            </div>
        </div>
        {{-- feedback ซ่อนไว้ก่อน --}}
        <div class="invalid-feedback">
            เพศ
        </div>
    </div>

    {{-- รูป --}}
    <div class="row mt-3 align-items-center">
        <div class="col-sm-12 col-md-4 form-label-col">
            <label for="profilePic" class="form-label">รูป</label>
        </div>
        <div class="col">
            <input class="form-control" type="file" id="profilePic" name="profile_picture" required>
            <div class="invalid-feedback">โปรดเลือกรูป</div>
        </div>
    </div>

    {{-- ที่อยู่ --}}
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label for="address" class="form-label">ที่อยู่</label>
        </div>
        <div class="col">
            <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
            <div class="invalid-feedback">โปรดระบุที่อยู่</div>
        </div>
    </div>

    {{-- สีที่ชอบ --}}
    <div class="row mt-3 align-items-center">
        <div class="col-sm-12 col-md-4 form-label-col">
            <label for="favColor" class="form-label">สีที่ชอบ</label>
        </div>
        <div class="col">
            <select class="form-select" id="favColor" name="favorite_color" required>
                <option value="">เลือกสี</option>
                <option value="red">สีแดง</option>
                <option value="blue">สีน้ำเงิน</option>
                <option value="green">สีเขียว</option>
            </select>
            <div class="invalid-feedback">โปรดระบุสีที่ชอบ</div>
        </div>
    </div>

    {{-- แนวเพลง --}}
    <div class="col">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="music_genre" value="for_life" required>
            <label class="form-check-label">เพื่อชีวิต</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="music_genre" value="country" required>
            <label class="form-check-label">ลูกทุ่ง</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="music_genre" value="other" required>
            <label class="form-check-label">อื่นๆ</label>
        </div>

        {{-- feedback ซ่อนไว้ก่อน --}}
        <div class="invalid-feedback">
            โปรดเลือกแนวเพลง
        </div>
    </div>


    {{-- ยินยอม --}}
    <div class="row mt-4">
        <div class="col-sm-12 col-md-4"></div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="consent" name="data_consent" required>
                <label class="form-check-label" for="consent">
                    ยินยอมให้เก็บข้อมูล
                </label>
                <div class="invalid-feedback">
                    ต้องยินยอมก่อนส่งข้อมูล
                </div>
            </div>
        </div>
    </div>

    {{-- ปุ่ม --}}
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <button type="reset" class="btn btn-secondary me-3">Reset</button>
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
    // Bootstrap validation
    (() => {
        'use strict'
        const forms = document.querySelectorAll('form')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()

    // Callback example
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
    console.log(1 == '1')
</script>
@endpush
