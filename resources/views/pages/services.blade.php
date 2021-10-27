@extends('master.main')

@section('content')
    <?php
        /*$value = 1;
        if ($value == 1){
            ?> <div style="background-image: url('{{asset('images/servicesBG.png')}}');
        position: relative;
        background-size: 100% auto;
        ;background-repeat: no-repeat" class="container">

    </div>
    <?php
        }*/
    ?>

    <style>
        .heroimage{
            background-image: url({{asset('images/servicesBG.png')}});
            background-color: #cccccc;
            height: 850px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        #title{
            font-family: 'Autumn in November', sans-serif;
            font-size: 70px;
        }
        .input-custom{
            border-radius: 10px;
            border-style: none;
        }
        .input-custom:focus{
            outline: none   ;
        }
        .img-custom{
            user-drag: none;
            -webkit-user-drag: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;

        }
        .custom-btn{
            background-color: #ced3db;
            border-radius: 30px;
            border-style: none;
            color: #0F1729;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
    <div class="heroimage img-fluid" style="padding-bottom: 10%">
        <header style="background-color: transparent">
            <div style="background-color: transparent">
                @component('master.header')
                @endcomponent
            </div>
        </header>
    <div class="container" style="margin-top: 2%; margin-bottom: 3%">
    <div class="d-flex justify-content-center">
        <h1 id="title">Serviços</h1>
    </div>

    <!--Cards -->
    <div  class="row" >
        <div id="card-service" class="col-xl-2 col-md-5 col-xs-12">
            <div >
                <img id="icon-service" src="{{asset('images/yesIDo.png')}}" alt="">
            </div>

            <h5 id="title-card-services">YES, I DO</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis odio tempore voluptatibus! Alias deleniti labore laborum nulla omnis, voluptates!</p>
        </div>
        <div id="card-service" class="col-xl-2 col-md-5 col-xs-12">
            <div>
                <img id="icon-service" src="{{asset('images/cupid.png')}}" alt="">
            </div>
            <h5 id="title-card-services">CUPID</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam esse itaque nam nisi nostrum nulla quam quibusdam repudiandae voluptas, voluptatibus!</p>
        </div>
        <div id="card-service" class="col-xl-2 col-md-5 col-xs-12">
            <div>
                <img id="icon-service" src="{{asset('images/business.png')}}" alt="">
            </div>
            <h5 id="title-card-services">BUSINESS</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consectetur libero nobis quia saepe similique sunt tempore voluptas. Ipsum, obcaecati?</p>
        </div>
        <div id="card-service" class="col-xl-2 col-md-5 col-xs-12">
            <div>
                <img id="icon-service" src="{{asset('images/maternity.png')}}" alt="">
            </div>
            <h5 id="title-card-services">MATERNITY</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut exercitationem hic laudantium omnis quasi quidem recusandae saepe suscipit, voluptas voluptate.</p>
        </div>
        <div id="card-service" class="col-xl-2 col-md-10 col-xs-12">
            <div>
                <img id="icon-service" src="{{asset('images/baptism.png')}}" alt="">
            </div>
            <h5 id="title-card-services">BAPTISM</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dicta facilis fugiat minima mollitia natus nostrum obcaecati perspiciatis, reprehenderit velit!</p>
        </div>

    </div>
    </div>
    </div>
    <div class="d-flex justify-content-center text-white" style="margin-top: 10px">
        <h1 id="title">Faça o seu orçamento</h1>
    </div>
    <div style="background-color: #353d4f; margin-top: 6%; border-radius: 30px; margin-bottom: 100px" class="container text-light" >
    <!--Form-->
        <div class="row">
        <div class="col-2" style="background-color: #5b6375; border-radius: 20px">
            <div class="row" style="margin-right: 25%; margin-left: 25%; padding-bottom: 30px">
            <img src="{{'/images/option.png'}}" class="img-custom" style="margin-top: 15%">
            </div>
            <div class="row" style="margin-right: 25%; margin-left: 25%; padding-bottom: 50px;margin-top: 15%">
            <img src="{{'/images/user-services.png'}}" class="img-custom">
            </div>
                <div class="row" style="margin-right: 25%; margin-left: 25%;margin-top: 15%">
            <img src="{{'/images/check.png'}}" class="img-custom">
                </div>
        </div>
        <div class="col-9">
    <div id="form-services" style="margin-top: 10px">
        <div id="line-form-service" style="background-color: #353d4f;">
            <div class="d-flex justify-content-around" style="margin-bottom: 40px">
                <div>
                    <p>YES, I DO</p>
                    <input type="checkbox">
                </div>
                <div>
                    <p>CUPID</p>
                    <input type="checkbox">
                </div>
                <div>
                    <p>BUSINESS</p>
                    <input type="checkbox">
                </div>
                <div>
                    <p>MATERNITY</p>
                    <input type="checkbox">
                </div>
                <div>
                    <p>BAPTISM</p>
                    <input type="checkbox">
                </div>

            </div>
            <hr>
        </div>
    </div>
        <div id="line-form-service">
            <div>
                <div class="d-flex justify-content-center">
                     <div class="d-flex justify-content-start"style=" margin-right: 30%" >
                         <p style="margin-right: 10px">Primeiro Nome</p>
                         <input type="text" class="input-custom">
                     </div>
                    <div class="d-flex justify-content-center">
                        <p style="margin-right: 10px">E-mail</p>
                        <input type="text"  class="input-custom">
                    </div>
                </div>
                <div class="d-flex justify-content-center" style="margin-top: 10px">
                    <div class="d-flex justify-content-center" style=" margin-right: 27%">
                        <p style="margin-right: 5px">Último Nome</p>
                        <input type="text" class="input-custom">
                    </div>
                    <div class="d-flex justify-content-start">
                        <p>Telemóvel</p>
                        <input type="number" style="margin-left: 7%" class="input-custom">
                    </div>
                </div>
            </div>
        </div>
            <hr>
        <div>
            <div class="d-flex justify-content-center text-light" style="margin-bottom: 10%; margin-top: 10%">
                <h3 style="margin-right: 40px">Total - 0€</h3>
                <button type="submit" class="custom-btn">SUBMETER ORÇAMENTO</button>
            </div>
        </div>
</div>
</div>
    </div >

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
@endsection
