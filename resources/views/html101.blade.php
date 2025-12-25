@extends('template.default')


@section('content')
    <h1>Workshop #HTML - FORM</h1>
    <form method="post">
            @csrf
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <label for="fname">ชื่อ</label>
                </div>
                <div class="col">
                    <input id="fname" class="form-control" name="fname">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุชื่อ
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label for="lname">สกุล</label>
                </div>
                <div class="col">
                    <input id="lname" class="form-control" name="lname">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุนามสกุล
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label for="Bday">วัน/เดือน/ปีเกิด</label>
                </div>
                <div class="col">
                    <input type="date" id="Bday" class="form-control" name="Bday">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุวันเกิด
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label for="age">อายุ</label>
                </div>
                <div class="col">
                    <input id="age" class="form-control" name="age">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุอายุ
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label>เพศ</label>
                </div>
                <div class="col-md-2">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="ชาย">
                    <label class="form-check-label" for="male">
                        ชาย
                    </label>
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุเพศ
                    </div>
                </div>
                <div class="col-md-2">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="หญิง">
                    <label class="form-check-label" for="female">
                        หญิง
                    </label>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label>รูป</label>
                </div>
                <div class="col">
                    <input class="form-control form-control-sm" id="fileInput" type="file" name="picture">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดใส่รูป
                    </div>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label>ที่อยู่</label>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="address" name="address" style="height: 100px"></textarea>
                        <label for="address">ที่อยู่</label>
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดใส่ที่อยู่
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label for="color">สีที่ชอบ</label>
                </div>
                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example" id="color" name="color">
                        <option value="" selected>เลือกสี</option>
                        <option value="แดง">แดง</option>
                        <option value="ดำ">ดำ</option>
                        <option value="ขาว">ขาว</option>
                        <option value="ชมพู">ชมพู</option>
                    </select>
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุสีที่ชอบ
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label>แนวเพลงที่ชอบ</label>
                </div>
                <div class="col-md-2">
                    <input class="form-check-input" type="radio" name="music" id="pop" value="ป๊อป">
                    <label class="form-check-label" for="pop">
                        ป๊อป
                    </label>
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุแนวเพลงที่ชอบ
                    </div>
                </div>
                <div class="col-md-2">
                    <input class="form-check-input" type="radio" name="music" id="rock" value="ร๊อค">
                    <label class="form-check-label" for="rock">
                        ร๊อค
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="radio" name="music" id="folk" value="ลูกทุ่ง">
                    <label class="form-check-label" for="folk">
                        ลูกทุ่ง
                    </label>
                </div>
            </div>

            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" value="ยินยอม" id="consent" name="consent">
                <label class="form-check-label" for="consent">
                    ยินยอมให้เก็บข้อมูล
                </label>
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-8">
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success" onclick="clickMe()">Submit</button>
                </div>
            </div>
        </form>

@endsection

@push('scripts')
    <script>
        let clickMe = function(){

            let fname = document.getElementById('fname');
            if(fname.value == ""){
                fname.classList.remove('is-valid');
                fname.classList.add('is-invalid');
            }else{
                fname.classList.remove('is-invalid');
                fname.classList.add('is-valid');
            }

            let lname = document.getElementById('lname');
            if(lname.value == ""){
                lname.classList.remove('is-valid');
                lname.classList.add('is-invalid');
            }else{
                lname.classList.remove('is-invalid');
                lname.classList.add('is-valid');
            }

            let Bday = document.getElementById('Bday');
            if(Bday.value == ""){
                Bday.classList.remove('is-valid')
                Bday.classList.add('is-invalid');
            }else{
                Bday.classList.remove('is-invalid');
                Bday.classList.add('is-valid');
            }

            let age = document.getElementById('age');
            if(age.value == ""){
                age.classList.remove('is-valid')
                age.classList.add('is-invalid');
            }else{
                age.classList.remove('is-invalid');
                age.classList.add('is-valid');
            }

            let male = document.getElementById('male');
            let female = document.getElementById('female');

            if (male.checked == false && female.checked == false) {
                male.classList.add('is-invalid');
                female.classList.add('is-invalid');
            } else {
                male.classList.remove('is-invalid');
                female.classList.remove('is-invalid');

            }

            let fileInput = document.getElementById('fileInput');
            if (fileInput.value == "") {
                fileInput.classList.remove('is-valid');
                fileInput.classList.add('is-invalid');
            } else {
                fileInput.classList.remove('is-invalid');
                fileInput.classList.add('is-valid');
            }

            let address = document.getElementById('address');
            if (address.value == "") {
                address.classList.remove('is-valid');
                address.classList.add('is-invalid');
            } else {
                address.classList.remove('is-invalid');
                address.classList.add('is-valid');
            }

            let color = document.getElementById('color');
            if (color.value == "") {
                color.classList.remove('is-valid');
                color.classList.add('is-invalid');
            } else {
                color.classList.remove('is-invalid');
                color.classList.add('is-valid');
            }

            let pop = document.getElementById('pop');
            let rock = document.getElementById('rock');
            let folk = document.getElementById('folk');

            if (pop.checked == false && rock.checked == false && folk.checked == false) {
                pop.classList.add('is-invalid');
                rock.classList.add('is-invalid');
                folk.classList.add('is-invalid');
            } else {
                pop.classList.remove('is-invalid');
                rock.classList.remove('is-invalid');
                folk.classList.remove('is-invalid');

            }

            let consent = document.getElementById('consent');
            if (consent.checked == false) {
                consent.classList.remove('is-valid');
                consent.classList.add('is-invalid');
            } else {
                consent.classList.remove('is-invalid');
                consent.classList.add('is-valid');
            }
        }

        // clickMe();
        let myfunc =(callback) =>{
            callback("in callback");
        }

        callme = (param) =>{
            console.log(param);
        }
        myfunc(callme)

        console.log('Hello World! JS')
        console.error('Hello Error!');
        console.warn('Hello Warn!');
    </script>
@endpush
