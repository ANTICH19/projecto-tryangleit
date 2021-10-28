@extends('master.main')

@section('content')
    <div class="container">

        <!--Title About-->
    @component('components.title' , ['title'=>'Sobre'])
    @endcomponent
        <!--End Title About-->

        <!--Carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active d-flex justify-content-center">
                    <img src="https://free4kwallpapers.com/uploads/originals/2020/06/05/a-bust-with-a-skull-mask-and-neon-lights-oc-wallpaper.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item d-flex justify-content-center">
                    <img src="https://free4kwallpapers.com/uploads/originals/2020/06/05/a-bust-with-a-skull-mask-and-neon-lights-oc-wallpaper.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item d-flex justify-content-center">
                    <img src="https://free4kwallpapers.com/uploads/originals/2020/06/05/a-bust-with-a-skull-mask-and-neon-lights-oc-wallpaper.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--End Carousel-->
        <!--Description About-->
        <div class="row d-flex justify-content-center">
            <h3 id="text-about" class="fs-1" style="padding-top: 3%">QUEM SOMOS?</h3>
            <p id="text-about" class="col-xl-10 col-sm-8"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cum debitis, doloremque doloribus ea ipsa laborum laudantium, nihil odio placeat porro quasi quos rerum saepe unde vel, velit vero voluptatem!</span><span>Ab delectus dolorem doloribus eum maxime natus, perspiciatis ratione vitae voluptas? A accusamus accusantium alias aperiam blanditiis consequatur cumque hic inventore libero officia quae rerum soluta, suscipit tempora temporibus? Eaque!</span><span>Ab eligendi ipsam magni maiores minima possimus quas veritatis? A aliquam beatae blanditiis corporis dolore excepturi facere facilis fugit incidunt iure libero, minus odio officiis optio placeat quidem, quod, tempora.</span><span>A at consequuntur debitis dignissimos distinctio dolorem fugiat illum ipsa laudantium, libero minima neque, nostrum obcaecati, perferendis perspiciatis quia ratione rem rerum sed tempora temporibus ut voluptatem! Debitis, doloremque, ex.</span><span>Architecto consectetur consequatur corporis debitis eligendi ex excepturi explicabo fuga hic incidunt ipsam itaque libero minus nam, nulla, odio porro provident quis repellendus repudiandae suscipit velit veniam voluptates! Delectus, odit.</span></p>
        </div>
        <!--End Description About-->
    </div>
@endsection
