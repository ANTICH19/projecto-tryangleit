@extends('/master/client_master')
@section('content')
    <style>
       .img-custom{
           height: 120px;
           width: auto;
           border-radius: 30px;
       }
    </style>
    <div class="container" style="padding-left: 100px;padding-bottom: 33px">
    <div class="row">
        <div class="col">
            <img src="{{'images/weding.jpg'}}" alt="cover" style="width: 150px; height: auto; border-radius: 40px">
        </div>
        <div class="col" style="padding-right: 70%; color: #FFFFFF;padding-top: 25px" >
            <h5><b>Meu Álbum</b></h5>
            <br>
            <h5>31-05-2000</h5>
            <br>
            <h5>Fotos - 78</h5>
            <br>
            <h5>Videos - 12</h5>
        </div>
    </div>
    <hr class="style-two">
    <div class="row">
        <div class="col" id="right-col">
            <div class="row">
                <div class="d-flex justify-content-center text-white">
                    <h2>
                        Fotos
                    </h2>
                </div>
                <div class="row" style="padding-left: 17%; padding-right: 10%">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                </div>
                <div class="row" style="margin-top: 15px;padding-left: 17%; padding-right: 10%">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                </div>
                <div class="row" style="margin-top: 15px ;padding-left: 17%; padding-right: 10%">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                </div>
                <div class="row" style="margin-top: 15px;padding-left: 17%; padding-right: 10%">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                </div>
            </div>
        </div>
        <div class="col" id="left-col">
            <div class="row">
                <div class="d-flex justify-content-center text-white">
                    <h2>
                        Videos
                    </h2>
                </div>
                <div class="row" style="padding-left: 17%; padding-right: 10%">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                </div>
                <div class="row" style="margin-top: 15px;padding-left: 17%; padding-right: 10%">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                </div>
                <div class="row" style="margin-top: 15px ;padding-left: 17%; padding-right: 10%">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                </div>
                <div class="row" style="margin-top: 15px;padding-left: 17%; padding-right: 10%">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-custom">
                    </div>
                </div>
    </div>
@endsection
