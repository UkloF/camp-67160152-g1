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
    <div class="container mt-4 mb-4">
        <h1>Workshop #HTML - FORM</h1>
        <form class=>
            <div class="row mt-1">
                <div class="col-sm-12 col-md-4">
                    <label for="fname">ชื่อ</label>
                </div>
                
                <div class="col">
                    <input id="fname" class="form-control">
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-sm-12 col-md-4">
                    <label for="lname">สกุล</label>
                </div>
                <div class="col">
                    <input id="lname" class="form-control">
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-sm-12 col-md-4">
                    <label for="Bday">วัน/เดือน/ปีเกิด</label>
                </div>
                <div class="col">
                    <input type="date" id="Bday" class="form-control">
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-sm-12 col-md-4">
                    <label for="age">อายุ</label>
                </div>
                <div class="col">
                    <input id="age" class="form-control">
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