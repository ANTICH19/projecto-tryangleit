
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
        <!--NavBar Tryangleit-->
        <header style="background-color: transparent">
            <div style="background-color: transparent">
                @component('master.header')
                @endcomponent
            </div>
        </header>
        <!--End NavBar Tryangleit-->
        <!--Picture Tryangleit-->
        @component('components.tryangleit')
        @endcomponent
        <!--End Picture Tryangleit-->

    </div>
    <div class="container" style="padding-top: 5%;padding-bottom: 2%">
        <!--Portfolio Images-->
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
        <!--End Portfolio Images-->
    </div>
    </div>
@endsection
