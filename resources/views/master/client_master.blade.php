<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<style>

    .container_custom {
        position: relative;
        width: 40%;
        height: 965px;


    }
    .container_custom img {
        width: 40%;
       opacity: 0.5;
        height: 969px;
    }
    .container_custom .btn1 {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
    .btn1{
        background-color: white;
        border-style: none;
        font-size: 25px;
        font-weight: bold;
        background-color: rgba(162, 162, 162, 0.78);
        color: #FFFFFF;
        padding: 20px;
        text-align: center;
        border-radius: 50px;
        cursor: pointer;
        text-decoration: none;
    }
    .container_custom .btn2 {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
    .btn2{
        background-color: white;
        border-style: none;
        font-size: 25px;
        font-weight: bold;
        background-color: rgba(162, 162, 162, 0.78);
        color: #FFFFFF;
        padding: 20px 40px;
        text-align: center;
        border-radius: 50px;
        cursor: pointer;
        text-decoration: none;
    }
    .container_custom .btn3 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
    .btn3{
        background-color: white;
        border-style: none;
        font-size: 25px;
        font-weight: bold;
        background-color: rgba(162, 162, 162, 0.78);
        color: #FFFFFF;
        padding: 20px 50px;
        text-align: center;
        border-radius: 50px;
        cursor: pointer;
        text-decoration: none;
    }
    .container .btn:hover {
        background-color: black;
    }
    hr.style-two {
        border: 0px;
        height: 3px;
        background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0));
    }

    #right-col{
        border-right: 6px solid white;
    }

</style>
<body style="background-color: #0F1729">
<div style="display: inline-flex">
<div class="container_custom">
    <img src="{{'images/bridge.jpg'}}" alt="foto" style="width:100%">
    <a class="btn1" href="{{'/home_client_albums'}}" type="button" >Os meus albuns</a>
    <br>
    <a class="btn2" href="#" type="button">Formulários</a>
    <br>
    <a class="btn3" href="#" type="button">Avaliações</a>
</div>

<div style="padding-left: 150px">
                @component('master.header')
                @endcomponent
    <div class="container" style="padding-top: 50px">
        @yield('content')
    </div>
</div>
</div>
</body>
</html>

