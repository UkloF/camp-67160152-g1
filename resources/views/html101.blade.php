@extends('template.default')


@section('content')
    <h1>Workshop #HTML - FORM</h1>
    <form>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <label for="fname">ชื่อ</label>
                </div>
                <div class="col">
                    <input id="fname" class="form-control">
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
                    <input id="lname" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label for="Bday">วัน/เดือน/ปีเกิด</label>
                </div>
                <div class="col">
                    <input type="date" id="Bday" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label for="age">อายุ</label>
                </div>
                <div class="col">
                    <input id="age" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label>เพศ</label>
                </div>
                <div class="col-md-2">
                    <input class="form-check-input" type="radio" name="phed" id="radioDefault1">
                    <label class="form-check-label" for="radioDefault1">
                        ชาย
                    </label>
                </div>
                <div class="col">
                    <input class="form-check-input" type="radio" name="phed" id="radioDefault2">
                    <label class="form-check-label" for="radioDefault2">
                        หญิง
                    </label>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label>รูป</label>
                </div>
                <div class="col">
                    <input class="form-control form-control-sm" id="roop" type="file">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label>ที่อยู่</label>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">ที่อยู่</label>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label for="shee">สี</label>
                </div>
                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example" id="shee">
                        <option selected>สีที่ชอบ</option>
                        <option value="1">แดง</option>
                        <option value="2">ดำ</option>
                        <option value="3">ขาว</option>
                        <option value="4">ชมพู</option>
                    </select>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-md-4">
                    <label>แนวเพลงที่ชอบ</label>
                </div>
                <div class="col-md-2">
                    <input class="form-check-input" type="radio" name="pleang" id="pleang1">
                    <label class="form-check-label" for="pleang1">
                        ป๊อป
                    </label>
                </div>
                <div class="col-md-2">
                    <input class="form-check-input" type="radio" name="pleang" id="pleang2">
                    <label class="form-check-label" for="pleang2">
                        ร๊อค
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="radio" name="pleang" id="pleang3">
                    <label class="form-check-label" for="pleang3">
                        ลูกทุ่ง
                    </label>
                </div>
            </div>

            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" value="" id="yinyom">
                <label class="form-check-label" for="yinyom">
                    ยินยอมให้เก็บข้อมูล
                </label>
            </div>

            <div class="row mt-2">
                <div class="col-md-8">
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-success" onclick="clickMe()">Submit</button>
                </div>
            </div>
        </form>

@endsection

@push('scripts')
    <script>
        let clickMe = function(){
            let fname = document.getElementById('fname');
            // fname.value = "from clickme";
            // console.log(fname.value);
            if(fname.value == ""){
                fname.classList.remove('is-valid');
                fname.classList.add('is-invalid');
            }else{
                fname.classList.remove('is-invalid');
                fname.classList.add('is-valid');
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
