@extends('master.main')

@section('content')
    <div class="container">
        <!--Title Blog-->
        @component('components.title' , ['title'=>'Blog'])
        @endcomponent
        <!--End Title Blog-->

        <!--Cards Blog-->
        <div class="row d-flex justify-content-center">
                @component('components.post')
                @endcomponent
                @component('components.post')
                @endcomponent
                @component('components.post')
                @endcomponent

        </div>
        <!--End Cards Blog-->
    </div>
@endsection
