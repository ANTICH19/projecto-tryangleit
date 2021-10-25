
@extends('master.main')

@section('content')
    <!--Style Background Image Portfolio-->
    <style>
        .heroimage{
            background-image: url({{asset('images/portfolioBG.png')}});
            height: 100%;
            background-position: center;
            background-size: cover;
        }
    </style>
    <!--End Style Background Image Portfolio-->
    <!--Background Image Portfolio & Logo-->
    <div class="heroimage" style="padding-bottom: 10%">
        <header style="background-color: transparent">
            <div style="background-color: transparent">
                @component('master.header')
                @endcomponent
            </div>
        </header>
        <!--Logo Tryangleit-->
        <picture  class="d-flex justify-content-center" >
            <source media="(min-width:771px)" srcset="{{asset('images/tryangleitWhite.png')}}">
            <source media="(min-width:0px)" srcset="{{asset('images/yTryangleitHome.png')}}">
            <img id="imag-home" src="{{asset('images/tryangleitWhite.png')}}">
        </picture>
        <!--End Logo Tryangleit-->
</div>
    <!--End Background Image Portfolio & Logo-->

    <!--Pictures-->
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
    <!--End Pictures-->
@endsection
