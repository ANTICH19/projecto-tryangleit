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
            display: block;
            max-width: 1%;
            height: 10%;
        }
    </style>
    <div class="heroimage img-fluid">
        <header style="background-color: transparent">
            <div style="background-color: transparent">
                @component('master.header')
                @endcomponent
            </div>
        </header>
    <div class="container">
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
    <div class="d-flex justify-content-center text-white">
        <h1 id="title">Faça o seu orçamento</h1>
    </div>
    <div style="background-color: #0F1729; margin-top: 5%" class="container text-light" >
    <!--Form-->
        <div class="row">
        <div class="col-3" style="background-color: #5b6375; border-radius: 20px">
            <div class="row">
            <img src="{{'/images/option.png'}}" class="img-responsive">
            </div>
            <div class="row">
            <img src="{{'/images/user.png'}}" class="img-custom">
            </div>
                <div class="row ">
            <img src="{{'/images/check.png'}}" class="img-custom">
                </div>
        </div>
        <div class="col-9">
    <div id="form-services" style="margin-top: 10%">
        <div id="line-form-service" style="background-color: #CED3DB23;">
            <div class="d-flex justify-content-around">
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
        </div>
    </div>
        <div id="line-form-service" style="margin-top: 20px">
            <div>
                <div class="d-flex justify-content-center">
                     <div class="d-flex justify-content-center">
                         <p>Primeiro Nome</p>
                         <input type="text" class="input-custom">
                     </div>
                    <div class="d-flex justify-content-center">
                        <p>E-mail</p>
                        <input type="text"  class="input-custom">
                    </div>
                </div>
                <div class="d-flex justify-content-center" style="margin-top: 10px">
                    <div class="d-flex justify-content-center">
                        <p>Último Nome</p>
                        <input type="text"  class="input-custom">
                    </div>
                    <div class="d-flex justify-content-center">
                        <p>Nº Telemóvel</p>
                        <input type="number"  class="input-custom">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex justify-content-center text-light" style="margin-bottom: 10%">
                <h3>Total - 0€</h3>
                <button>SUBMETER ORÇAMENTO</button>
            </div>
        </div>
</div>
</div>
    </div>





    <link href="{{asset('css/app.css')}}" rel="stylesheet">
@endsection
