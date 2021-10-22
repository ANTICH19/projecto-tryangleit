<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v12.0" nonce="J9vSv2Ws"></script>
    <title>Tryangleit</title>
</head>
<div id=" app">
    <div style="background-color: {{$color}}">

        @switch($header)
            @case(1)
            <header style="background-color: transparent">
                <div style="background-color: transparent">
                    @component('master.header')
                    @endcomponent
                </div>
            </header>
            @break
            @case(2)
            <header>
            </header>
            @break
            @default
            <header style="background-color: transparent">
                <div style="background-color: transparent">
                    @component('master.header')
                    @endcomponent
                </div>
            </header>
        @endswitch

            @yield('content')

            @switch($footer)
                @case(1)
                @component('master.footer')
                @endcomponent
                @break
                @case(2)
                @break
                @default
                @component('master.footer')
                @endcomponent
            @endswitch
    </div>
</div>
<script src="{{asset('js/nav.js')}}"></script>
</html>
