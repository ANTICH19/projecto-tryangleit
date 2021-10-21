@extends('master.main')

@section('content')
    <div id="body-blog">


        <div class="d-flex justify-content-around" style="text-align: center">
            <h1 id="title-blog">Blog</h1>
        </div>

        <div class="row">
            <div id="post-blog" class="col-md-10 col-lg-5">
                <div id="content-imag-blog">
                    <img id="imag-blog" src="https://cdna.artstation.com/p/assets/images/images/022/949/160/medium/mighty-games-wallpaper-1080x1080-edited.jpg?1577425474" alt="">
                </div>
                <div id="text-post">
                    <h3 id="text-blog">TITLE 1</h3>
                    <hr id="bar-blog">
                    <p  id="text-blog"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, exercitationem, iure? Adipisci aperiam consequatur deserunt dicta error facere hic illo illum molestias nihil non odio quam, quas rerum sint voluptas.</span><span>Accusantium assumenda ea eveniet molestiae nulla odio pariatur, quis tempora temporibus ut. Ea et id odio perferendis? Architecto dignissimos dolorum nesciunt qui reiciendis? Eligendi facere inventore non sapiente temporibus vel.</span></p>
                </div>
            </div>
            <div id="post-blog" class="col-md-10 col-lg-5">
                <div id="content-imag-blog">
                    <img id="imag-blog" src="https://cdna.artstation.com/p/assets/images/images/022/949/160/medium/mighty-games-wallpaper-1080x1080-edited.jpg?1577425474" alt="">
                </div>
                <div id="text-post">
                    <h3 id="text-blog">TITLE 1</h3>
                    <hr id="bar-blog">
                    <p  id="text-blog"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, exercitationem, iure? Adipisci aperiam consequatur deserunt dicta error facere hic illo illum molestias nihil non odio quam, quas rerum sint voluptas.</span><span>Accusantium assumenda ea eveniet molestiae nulla odio pariatur, quis tempora temporibus ut. Ea et id odio perferendis? Architecto dignissimos dolorum nesciunt qui reiciendis? Eligendi facere inventore non sapiente temporibus vel.</span></p>
                </div>
            </div>
            <div id="post-blog" class="col-md-10 col-lg-5">
                <div id="content-imag-blog">
                    <img id="imag-blog" src="https://cdna.artstation.com/p/assets/images/images/022/949/160/medium/mighty-games-wallpaper-1080x1080-edited.jpg?1577425474" alt="">
                </div>
                <div id="text-post">
                    <h3 id="text-blog">TITLE 1</h3>
                    <hr id="bar-blog">
                    <p  id="text-blog">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, exercitationem, iure? Adipisci aperiam consequatur deserunt dicta error facere hic illo illum molestias nihil non odio quam, quas rerum sint voluptas. </span>
                        <span> Accusantium assumenda ea eveniet molestiae nulla odio pariatur, quis tempora temporibus ut. Ea et id odio perferendis? Architecto dignissimos dolorum nesciunt qui reiciendis? Eligendi facere inventore non sapiente temporibus vel.</span></p>
                </div>
            </div>
        </div>



    </div>
    <style>

        #post-blog{
            background-color: #CED3DB23;
            padding: 50px 10px;
            border-radius: 20px;
            margin: 3% 4%;
            flex-direction: column;
            text-align: center;
        }
        #imag-blog{
            border-radius: 20px;
            border: 2px solid #ced3db;
            padding: 5px;
            width: 65%;
            margin-bottom: 20px
        }


        @media only screen and (max-width: 770px) {



            #post-blog{
               margin-left: 8%;
                display: flex;
                text-align: center;
                flex-direction: column;
                background-color: #CED3DB23;
                border-radius: 50px;
            }
            #imag-blog {
                margin: 20px 0px 20px 0px;
                width: 200px;
            }
        }

    </style>





@endsection
