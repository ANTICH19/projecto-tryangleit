@extends('/master/client_master')
@section('content')
    <style>
        .img-custom {
            height: 200px;
            width: auto;
        }
    .a-custom{
        text-decoration: none;
    }
    </style>
    <div class="container" style="padding-left: 150px; padding-top: 25px">

        <div class="row text-white">
        <h4><b>As minhas Galerias</b></h4>
        </div>
        <hr class="style-two">
        <div class="row">
            <div class="col">
                <a class="a-custom" href="{{'/home_client_albums'}}">
                <img src="{{'images/weding.jpg'}}" class="img-fluid img-custom">
                <div style="text-align: center ;color: white; font-weight: bold">
                <h5>Casamento</h5>
                </div>
                </a>
            </div>
            <div class="col">
                <a class="a-custom" href="{{'/home_client_albums'}}">
                    <img src="{{'images/weding.jpg'}}" class="img-fluid img-custom">
                    <div style="text-align: center ;color: white; font-weight: bold">
                        <h5>Casamento Ana&Miguel</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="a-custom" href="{{'/home_client_albums'}}">
                    <img src="{{'images/weding.jpg'}}" class="img-fluid img-custom">
                    <div style="text-align: center ;color: white; font-weight: bold">
                        <h5>Casamento</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="a-custom" href="{{'/home_client_albums'}}">
                    <img src="{{'images/weding.jpg'}}" class="img-fluid img-custom">
                    <div style="text-align: center ;color: white; font-weight: bold">
                        <h5>Casamento</h5>
                    </div>
                </a>
            </div>

        </div>
    </div>
@endsection
