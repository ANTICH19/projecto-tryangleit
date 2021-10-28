
@extends('master.main')

@section('content')
    <style>
        .heroimage{
            background-image: url({{asset('images/portfolioBG.png')}});
            background-color: #cccccc;
            height: 947px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
    </style>
<div class="heroimage">
    <header style="background-color: transparent">
        <div style="background-color: transparent">
            @component('master.header')
            @endcomponent
        </div>
    </header>

        <picture  class="d-flex justify-content-center" >
            <source media="(min-width:771px)" srcset="{{asset('images/tryangleitWhite.png')}}">
            <source media="(min-width:0px)" srcset="{{asset('images/yTryangleitHome.png')}}">
            <img id="imag-home" src="{{asset('images/tryangleitWhite.png')}}">
        </picture>


</div>
    <div class="container" style="padding-top: 5%;padding-bottom: 2%">
        <div class="row mt-3">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                <img class="img-fluid" style="border-radius: 7%" src="https://mcdn.wallpapersafari.com/medium/77/90/056lrX.jpg" alt="">
            </div>
        </div>
    </div>
    </div>
@endsection
