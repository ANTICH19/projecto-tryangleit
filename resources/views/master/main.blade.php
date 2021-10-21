<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Tryangleit</title>
</head>
<div id=" app">
    <div style="background-color: {{$color}}">
        <header style="background-color: transparent">
            <div style="background-color: transparent">
            @component('master.header')
            @endcomponent
            </div>
        </header>

            @yield('content')

        <div class="">
            @component('master.footer')
            @endcomponent
        </div>
    </div>
</div>
<script src="{{asset('js/nav.js')}}"></script>
</html>
