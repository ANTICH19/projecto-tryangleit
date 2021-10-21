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
    </style>
    <div class="heroimage">

    <div class="container">
    <div class="d-flex justify-content-center">
        <h1 id="title">Serviços</h1>
    </div>

    <!--Cards -->
    <div id="cards-service" >
        <div id="card-service">
            <div >
                <img id="icon-service" src="{{asset('images/yesIDo.png')}}" alt="">
            </div>

            <h5 id="title-card-services">YES, I DO</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis odio tempore voluptatibus! Alias deleniti labore laborum nulla omnis, voluptates!</p>
        </div>
        <div id="card-service">
            <div>
                <img id="icon-service" src="{{asset('images/cupid.png')}}" alt="">
            </div>
            <h5 id="title-card-services">CUPID</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam esse itaque nam nisi nostrum nulla quam quibusdam repudiandae voluptas, voluptatibus!</p>
        </div>
        <div id="card-service">
            <div>
                <img id="icon-service" src="{{asset('images/business.png')}}" alt="">
            </div>
            <h5 id="title-card-services">BUSINESS</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consectetur libero nobis quia saepe similique sunt tempore voluptas. Ipsum, obcaecati?</p>
        </div>
        <div id="card-service">
            <div>
                <img id="icon-service" src="{{asset('images/maternity.png')}}" alt="">
            </div>
            <h5 id="title-card-services">MATERNITY</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut exercitationem hic laudantium omnis quasi quidem recusandae saepe suscipit, voluptas voluptate.</p>
        </div>
        <div id="card-service">
            <div>
                <img id="icon-service" src="{{asset('images/baptism.png')}}" alt="">
            </div>
            <h5 id="title-card-services">BAPTISM</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dicta facilis fugiat minima mollitia natus nostrum obcaecati perspiciatis, reprehenderit velit!</p>
        </div>

    </div>
    </div>
    </div>
<div style="background-color: #0F1729" class="container" >
    <!--Form-->
    <div class="d-flex justify-content-center text-white">
        <h1 id="title-services">Faça o seu orçamento</h1>
    </div>

    <div id="form-services">
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
        <div id="line-form-service">
            <div>
                <div class="d-flex justify-content-center">
                     <div class="d-flex justify-content-center">
                         <p>Primeiro Nome</p>
                         <input type="text">
                     </div>
                    <div class="d-flex justify-content-center">
                        <p>E-mail</p>
                        <input type="text">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                        <p>Último Nome</p>
                        <input type="text">
                    </div>
                    <div class="d-flex justify-content-center">
                        <p>Nº Telemóvel</p>
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex justify-content-center">
                <h3>Total - 0€</h3>
                <button>SUBMETER ORÇAMENTO</button>
            </div>
        </div>
</div>

@endsection
