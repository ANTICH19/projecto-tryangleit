<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Tryangleit</title>
</head>
<body id=" app" style="background-color: #0F1729;">
    <div class="container">
        <header>
        @component('master.header')
        @endcomponent
        </header>


        @yield('content')


        @component('master.footer')
        @endcomponent
    </div>

<script src="{{asset('js/nav.js')}}"></script>



</body>
</html>
