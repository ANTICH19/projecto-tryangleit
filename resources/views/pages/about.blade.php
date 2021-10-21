@extends('master.main')

@section('content')
    <div class="d-flex justify-content-around" style="text-align: center">
        <h1 id="title">Sobre</h1>
    </div>



    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F11%2F1a%2F03%2F111a03133d14214539c96e0f657dff1a.png&imgrefurl=https%3A%2F%2Fbr.pinterest.com%2Fycaroabreu%2Fwallpaper-pc%2F&tbnid=I7Zq9ABTWbsRqM&vet=12ahUKEwi30uzrmdzzAhVC3RoKHcgBCMIQMygAegUIARCvAQ..i&docid=5tmWHkLf50rUUM&w=1920&h=1080&q=wallpaper%201920x1080&ved=2ahUKEwi30uzrmdzzAhVC3RoKHcgBCMIQMygAegUIARCvAQ" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fimages3.alphacoders.com%2F954%2Fthumb-1920-954241.jpg&imgrefurl=https%3A%2F%2Fwall.alphacoders.com%2Fby_sub_category.php%3Fid%3D168571%26name%3DMinimalismo%2BPap%25C3%25A9is%2Bde%2BParede%26lang%3DPortuguese&tbnid=jZSkZQAzAy4r7M&vet=12ahUKEwi30uzrmdzzAhVC3RoKHcgBCMIQMygDegUIARC1AQ..i&docid=EhUhP7y2gXgP5M&w=1920&h=1080&q=wallpaper%201920x1080&ved=2ahUKEwi30uzrmdzzAhVC3RoKHcgBCMIQMygDegUIARC1AQ" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
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



    <div class="d-flex justify-content-center">
        <img id="about-tryangleit" src="{{asset('images/tryangleitWhite.png')}}" alt="">
    </div>
    <div class="justify-content-center">
        <h3 id="text-about">QUEM SOMOS?</h3>
        <p id="text-about"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cum debitis, doloremque doloribus ea ipsa laborum laudantium, nihil odio placeat porro quasi quos rerum saepe unde vel, velit vero voluptatem!</span><span>Ab delectus dolorem doloribus eum maxime natus, perspiciatis ratione vitae voluptas? A accusamus accusantium alias aperiam blanditiis consequatur cumque hic inventore libero officia quae rerum soluta, suscipit tempora temporibus? Eaque!</span><span>Ab eligendi ipsam magni maiores minima possimus quas veritatis? A aliquam beatae blanditiis corporis dolore excepturi facere facilis fugit incidunt iure libero, minus odio officiis optio placeat quidem, quod, tempora.</span><span>A at consequuntur debitis dignissimos distinctio dolorem fugiat illum ipsa laudantium, libero minima neque, nostrum obcaecati, perferendis perspiciatis quia ratione rem rerum sed tempora temporibus ut voluptatem! Debitis, doloremque, ex.</span><span>Architecto consectetur consequatur corporis debitis eligendi ex excepturi explicabo fuga hic incidunt ipsam itaque libero minus nam, nulla, odio porro provident quis repellendus repudiandae suscipit velit veniam voluptates! Delectus, odit.</span></p>
    </div>
@endsection
