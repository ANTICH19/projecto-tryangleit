@extends('/master/client_master')
@section('content')
    <div class="container" style="padding-left: 100px">
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
                <div class="row">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
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
                <div class="row" style="padding-left: 10px">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{'images/weding.jpg'}}" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
    </div>
@endsection
