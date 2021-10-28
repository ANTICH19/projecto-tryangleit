@extends('master.main')

@section('content')


    <div class="container d-flex justify-content-center" style="margin-top: 5%; padding-bottom: 8.7%">
        <div class="login_container justify-content-center col-md-9 col-lg-12">
            <div class="row">
                <!--Picture Login-->
                <div class="col-md-12 col-lg-6">
                    <img src="{{asset('images/couple.jpg')}}" class="img-fluid" style="border-radius: 30px">
                </div>
                <!--End Picture Login-->
                <!--Login-->
                <div class="col-md-12 col-lg-6 d-flex justify-content-center align-items-center" >
                    <div class="container flex-column row justify-content-center">
                        <!--Title Login-->
                    @component('components.title' , ['title'=>'Login'])
                    @endcomponent
                        <!--End Title Login-->
                        <!--Login Forms-->
                        <form class="container justify-content-center" style="margin-left: 10%">
                            <!--User-->
                            <div class="row justify-content-center col-10">
                                <div class="col-2" id="icon-login">
                                    <img src="{{asset('images/user.png')}}" class="inputimg">
                                </div>
                                <input type="text" class="custominput col-8" placeholder="Username" >
                            </div>
                            <!--End User-->
                            <!--Password-->
                            <div class="row justify-content-center col-10" >
                                <div class="col-2" id="icon-login">
                                    <img src="{{asset('images/password.png')}}" class="inputimg">
                                </div>
                                <input type="password" class="custominput col-8" placeholder="Password" >
                            </div>
                            <!--End Password-->
                            <!--Btn Login-->
                            <div class="row justify-content-center align-items-center col-12" style="margin-left: -10%">
                                <button type="submit" class="custombut col-4">Login</button>
                            </div>
                            <!--End Btn Login-->
                        </form>
                        <!--End Login Forms-->
                    </div>
                 </div>
                <!--End Login-->
            </div>
        </div>
    </div>
@endsection
