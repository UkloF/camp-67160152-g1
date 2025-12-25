@extends('template.default')
@section('header','ข้อมูล')
@section('content')
<body>
    <label>ชื่อ -> {{$fname}}</label>
    <br>
    <label>นามสกุล -> {{$lname}}</label>
    <br>
    <label>วันเกิด -> {{$Bday}}</label>
    <br>
    <label>อายุ -> {{$age}}</label>
    <br>
    <label>เพศ -> {{$gender ?? null}}</label>
    <br>
    <label>ที่อยู่ -> {{$address}}</label>
    <br>
    <label>สีที่ชอบ -> {{$color}}</label>
    <br>
    <label>แนวเพลงที่ชอบ -> {{$music ?? null}}</label>
    <br>
    <label>ยินยอมให้กรอกข้อมูล -> {{$consent ?? "ไม่ยินยอม"}}</label>
</body>

@push('styles')
   <style>
    header{
        font-size: 45px;
        text-align: center;
    }
    body{
        font-size: 20px
    }
   </style>
@endpush

@endsection
