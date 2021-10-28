@extends('master.main')

@section('content')
    <div class="container">

        <!--Title About-->
    @component('components.title' , ['title'=>'Sobre'])
    @endcomponent
        <!--End Title About-->

        <!--Carousel-->
        @component('components.carousel')
        @endcomponent

        <!--End Carousel-->
        <!--Description About-->
        <div class="row d-flex justify-content-center">
            <h3 id="text-about" class="fs-1" style="padding-top: 3%">QUEM SOMOS?</h3>
            <p id="text-about" class="col-xl-10 col-sm-8"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cum debitis, doloremque doloribus ea ipsa laborum laudantium, nihil odio placeat porro quasi quos rerum saepe unde vel, velit vero voluptatem!</span><span>Ab delectus dolorem doloribus eum maxime natus, perspiciatis ratione vitae voluptas? A accusamus accusantium alias aperiam blanditiis consequatur cumque hic inventore libero officia quae rerum soluta, suscipit tempora temporibus? Eaque!</span><span>Ab eligendi ipsam magni maiores minima possimus quas veritatis? A aliquam beatae blanditiis corporis dolore excepturi facere facilis fugit incidunt iure libero, minus odio officiis optio placeat quidem, quod, tempora.</span><span>A at consequuntur debitis dignissimos distinctio dolorem fugiat illum ipsa laudantium, libero minima neque, nostrum obcaecati, perferendis perspiciatis quia ratione rem rerum sed tempora temporibus ut voluptatem! Debitis, doloremque, ex.</span><span>Architecto consectetur consequatur corporis debitis eligendi ex excepturi explicabo fuga hic incidunt ipsam itaque libero minus nam, nulla, odio porro provident quis repellendus repudiandae suscipit velit veniam voluptates! Delectus, odit.</span></p>
        </div>
        <!--End Description About-->
    </div>
@endsection
