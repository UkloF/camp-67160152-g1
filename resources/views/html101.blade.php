<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ส่วนหัว HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="container mt-4 mb-4 ms-8">
        <h1>Workshop #HTML - FORM</h1>
        <form class=>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <label for="fname">ชื่อ</label>
                </div>
                <div class="col">
                    <input id="fname" class="form-control">
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
                <div class="col-md-8">
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
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
    <style>
        body{
            font-family: "Prompt", sans-serif;
            font-weight: 400;
            font-style: normal;
            background: rgb(212, 204, 187);
            font-size: 14px;
            /* background-image: url('https://i.redd.it/00gl7374rjmf1.jpeg'); */
            
        }
        .container{
            background: rgb(183, 175, 149);
            width: 500px;
            border-radius: 15px;
            padding: 30px 40px;
        }
        h1{
            font-size: 32px;
        }
        
    </style>
</html>