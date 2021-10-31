@extends('master.main')

@section('content')

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

        .img-custom{
            user-drag: none;
            -webkit-user-drag: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            width: 20%;

        }
        .custom-btn{
            background-color: #ced3db;
            border-radius: 20px;
            border-style: none;
            color: #0F1729;
            font-size: 20px;
            padding: 0% 2%;
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
            @component('components.title' , ['title'=>'Serviços'])
            @endcomponent

            <!--Cards -->
            <div  class="row container" >
                @component('components.card-service', [
                            'title'       => 'YES, I DO',
                            'image'       => 'images/yesIDo.png' ,
                            'description' => 'this is a description'
                            ])
                @endcomponent
                @component('components.card-service', [
                            'title'       => 'CUPID',
                            'image'       => 'images/cupid.png',
                            'description' => 'this is a description'
                            ])
                @endcomponent
                @component('components.card-service', [
                            'title'       => 'BUSINESS',
                            'image'       => 'images/business.png' ,
                            'description' => 'this is a description'
                            ])
                @endcomponent
                @component('components.card-service', [
                            'title'       => 'MATERNITY',
                            'image'       => 'images/maternity.png' ,
                            'description' => 'this is a description'
                            ])
                @endcomponent
                @component('components.card-service', [
                            'title'       => 'BAPTISM',
                            'image'       => 'images/baptism.png' ,
                            'description' => 'this is a description'
                            ])
                @endcomponent

            </div>
        </div>
    </div>
    @component('components.title', ['title' => 'Faça o seu orçamento'])
    @endcomponent
    <div style="background-color: #353d4f; margin-top: 6%; border-radius: 30px; margin-bottom: 100px" class="container text-light container" >
    <!--Form-->
    <div class="row container">
        <div class="col-12">
            <form class="justify-content-between">
                <div class="row justify-content-between align-self-center">
                    <div id="img-custom" class="row col-sm-2 col-md-3 col-lg-2 col-2 align-self-center">
                        <img src="{{'/images/option.png'}}">
                    </div>
                    <div class=" col-sm-10 col-md-9 col- lg-12 col-10">
                        <div class="d-flex justify-content-center row" style="padding-top: 40px">
                            @component('components.checkbox', ['title' => 'YES, I DO'])
                            @endcomponent
                            @component('components.checkbox', ['title' => 'CUPID'])
                            @endcomponent
                            @component('components.checkbox', ['title' => 'BUSINESS'])
                            @endcomponent
                            @component('components.checkbox', ['title' => 'MATERNITY'])
                            @endcomponent
                            @component('components.checkbox', ['title' => 'BAPTISM'])
                            @endcomponent
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row justify-content-between align-self-center">
                    <div id="img-custom" class="row col-sm-2 col-md-3 col-lg-2 col-2 align-self-center">
                            <img src="{{'/images/check.png'}}">
                        </div>
                    <div class=" col-sm-10 col-md-9 col- lg-12 col-10">
                        <div class="d-flex justify-content-center row">
                        @component('components.text-form', ['label' => 'Primeiro Nome'])
                        @endcomponent
                        @component('components.text-form', ['label' => 'Último Nome'])
                        @endcomponent
                        @component('components.text-form', ['label' => 'E-mail Nome'])
                        @endcomponent
                        @component('components.text-form', ['label' => 'Telemóvel Nome'])
                        @endcomponent
                    </div>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-between align-self-center">
                    <div id="img-custom" class="row col-sm-2 col-md-3 col-lg-2 col-2 align-self-center">
                            <img src="{{'/images/user-services.png'}}">
                        </div>
                    <div class=" col-sm-10 col-md-9 col- lg-12 col-10">
                    <div class="d-flex justify-content-center text-light" style="margin-bottom: 10%; margin-top: 10%">
                        <h3 style="margin-right: 40px">Total - 0€</h3>
                        <button type="submit" class="custom-btn">SUBMETER ORÇAMENTO</button>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div >

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
@endsection
