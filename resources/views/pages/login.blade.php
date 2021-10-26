@extends('master.main')

@section('content')
    <style>
        .login_container{
            border-radius: 7%;
            -webkit-border-bottom-right-radius: 2% 2%;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            background-color: #353d4f;
        }
        .custombut{
            background-color: #ced3db;
            border-color: transparent;
            border-radius: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 20px;
        }
        .custominput{
            background-color: transparent;
            border-style: none;
            border-bottom-style: solid;
            border-color: #bdc2cc;
            margin-bottom: 20px;
            color: white;


        }
        .custominput:focus{
            border-color: transparent;
            border-style: none;
            border-bottom-style: solid;
            border-color: #bdc2cc;
            outline: none;
            text-indent: 30px;
        }
        .custominput:focus::placeholder{
            font-size: 0px;

        }
        .custominput::placeholder{
            color: white;
            padding-left: 40px;
            font-size: 20px;
        }

        .inputimg{
            height: 30px;
            width: auto;
            position: absolute;
            user-drag: none;
            -webkit-user-drag: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
        #title{
            font-family: 'Autumn in November', sans-serif;
            font-size: 70px;
        }
    </style>

    <div class="container" style="margin-top: 5%; padding-bottom: 8.7%">
        <div class="login_container">
        <div class="row">
            <div class="col">
        <img src="{{asset('images/couple.jpg')}}" class="img-fluid" style="border-radius: 7%">
            </div>
            <div class="col">
                <div class="container">
                <div style="font-size: larger;color: white" class="d-flex justify-content-center mt-5">
                    <h1 id="title">Login</h1>
                </div>
                    <form>
                    <div class="row" style="margin-right: 20%;margin-left: 20%;margin-top: 10%">
                        <img src="{{asset('images/user.png')}}" class="inputimg">
                        <input type="text" id="user" class="custominput" placeholder="Username" style="padding-top: 10px">
                    </div>
                    <div class="row" style="margin-right: 20%;margin-left: 20%">
                        <img src="{{asset('images/password.png')}}" class="inputimg">
                        <input type="password" class="custominput" placeholder="Password" style="padding-top: 10px">
                    </div>
                        <div class="row d-flex justify-content-center" style="margin-left: 30%;margin-right: 30%; margin-top: 10%">
                            <button type="submit" class="custombut">Login</button>
                        </div>
                    </form>
                </div>
             </div>
            </div>
        </div>
    </div>

@endsection
