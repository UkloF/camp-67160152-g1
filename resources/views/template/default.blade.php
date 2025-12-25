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
<style>
        body{
            font-family: "Prompt", sans-serif;
            font-weight: 400;
            font-style: normal;
            background: rgb(146, 139, 122);
            font-size: 14px;
            /* background-image: url('https://i.redd.it/00gl7374rjmf1.jpeg'); */

        }
        .container{
            background: rgb(183, 175, 149);
            width: 700px;
            border-radius: 15px;
            padding: 30px 40px;
        }
        h1{
            font-size: 32px;
        }
        header{
            font-size: 32px;
        }

    </style>
    @stack('styles')
</html>
<body>
    <div class="container mt-4">
        <header>@yield('header')</header>
        @yield('content')
    </div>
    @stack('scripts')
</body>

</html>
