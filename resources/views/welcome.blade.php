<!doctype html>
<html class="no-js" lang="{{config('app.locale')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$config['App_title']}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
</head>
<body>
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<main class="main">
    <header class="header">
        <div class="header_cont">
            <h1 class="header_logo">
                <!--<img src="#" alt="U&D">-->
            </h1>
            <nav class="header_nav">
                <ul class="list list-header">
                    <li class="list_item item item-active">
                        <a class="scroll-to item_link" href="sct-intro">Accueil</a>
                    </li>
                    <li class="list_item item">
                        <a class="scroll-to item_link" href="sct-about">À propos</a>
                    </li>
                    <li class="list_item item">
                        <a class="scroll-to item_link" href="sct-carousel">Savoir-faire</a>
                    </li>
                    <li class="list_item item">
                        <a class="scroll-to item_link" href="sct-partners">Partenaires</a>
                    </li>
                    <li class="list_item item">
                        <a class="scroll-to item_link" href="sct-contact">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="header_bg"></div>
        </div>
    </header>
    <section class="sct" id="sct-intro">
        <div class="sct_cont sct_row">
            <div class="sct_title title">
                <h1 class="title_main">
                    {!! $content['title'] !!}
                </h1>
            </div>
            <div class="sct_cnt cnt">
                <a class="sct_button scroll-to" href="sct-about"><span class="icon icon-down"></span></a>
                <ul class="sct_list list list-sociaux">
                    <li class="list_item item"><a href="{{$config['Link_social_in']}}"
                                                  class="item_link icon icon-linkedin"></a></li>
                    <li class="list_item item"><a href="{{$config['Link_social_fb']}}"
                                                  class="item_link icon icon-facebook"></a></li>
                </ul>
            </div>
        </div>
        <div class="vid-filter"></div>
        <video id="bgvid" playsinline autoplay muted loop poster="img/bg@3x.jpg">
            <source
                    src="img/video.webm"
                    type="video/webm">
            <source
                    src="img/video.mp4"
                    type="video/mp4">
        </video>
        {{--<img id="bgvid" src="img/bg@3x.jpg">--}}
    </section>
    <section class="sct" id="sct-about">
        <div class="sct_cont">
            <div class="sct_container">
                <div class="sct_title title">
                    <h2 class="title_scd">
                        A propos de nous.
                    </h2>
                    <h1 class="title_main">
                        U&D
                    </h1>
                </div>
                <div class="sct_cnt cnt">
                    <p class="cnt_pg">
                       {!! $content['collaborateur'] !!}
                    </p>
                </div>
            </div>
            <div class="sct_carousel owl-carousel about-carousel">
                @foreach($collabs as $collab)
                <div class="item">
                    <div class="item_container">
                        <img class="item_img" src="/profil/{{$collab->img}}" alt="#">
                    </div>
                    <div class="item_title title">
                        <h1 class="title_main">
                           {{$collab->name}}
                        </h1>
                        <h2 class="title_scd">
                           {{$collab->fonction}}
                        </h2>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </section>
    <section class="sct" id="sct-carousel">
        <div class="sct_cont">
            <div class="sct_carousel owl-carousel first-carousel">
                <div class="item">
                    <div class="item_title title">
                        <h2 class="title_scd">
                            Notre savoir faire
                        </h2>
                        <h1 class="title_main">
                            Maçonnerie
                        </h1>
                    </div>
                    <div class="item_cnt cnt">
                        <p class="cnt_pg">U&D réalise tous travaux de maçonnerie,
                            depuis les fondations jusqu'aux enduits de finition,
                            en passant par les murs de soutènement, les escaliers monumentaux,
                            etc.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item_title title">
                        <h2 class="title_scd">
                            Notre savoir faire
                        </h2>
                        <h1 class="title_main">
                            Maçonnerie
                        </h1>
                    </div>
                    <div class="item_cnt cnt">
                        <p class="cnt_pg">U&D réalise tous travaux de maçonnerie,
                            depuis les fondations jusqu'aux enduits de finition,
                            en passant par les murs de soutènement, les escaliers monumentaux,
                            etc.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item_title title">
                        <h2 class="title_scd">
                            Notre savoir faire
                        </h2>
                        <h1 class="title_main">
                            Maçonnerie
                        </h1>
                    </div>
                    <div class="item_cnt cnt">
                        <p class="cnt_pg">U&D réalise tous travaux de maçonnerie,
                            depuis les fondations jusqu'aux enduits de finition,
                            en passant par les murs de soutènement, les escaliers monumentaux,
                            etc.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item_title title">
                        <h2 class="title_scd">
                            Notre savoir faire
                        </h2>
                        <h1 class="title_main">
                            Maçonnerie
                        </h1>
                    </div>
                    <div class="item_cnt cnt">
                        <p class="cnt_pg">U&D réalise tous travaux de maçonnerie,
                            depuis les fondations jusqu'aux enduits de finition,
                            en passant par les murs de soutènement, les escaliers monumentaux,
                            etc.</p>
                    </div>
                </div>
            </div>
            <div class="sct_carousel owl-carousel second-carousel">
                <div class="item"><img class="item_img" src="img/bg@3x.jpg" alt="#"></div>
                <div class="item"><img class="item_img" src="img/bg@3x.jpg" alt="#"></div>
                <div class="item"><img class="item_img" src="img/bg@3x.jpg" alt="#"></div>
                <div class="item"><img class="item_img" src="img/bg@3x.jpg" alt="#"></div>
                <div class="item"><img class="item_img" src="img/bg@3x.jpg" alt="#"></div>
            </div>
        </div>
    </section>
    <section class="sct" id="sct-number">
        <div class="sct_cont">
            <div class="sct-content">
                <ul class="sct_list list sct_row">
                    <li class="list_item item sct_col col-4">
                        <div class="item_title title">
                            <h1 class="title_main">
                                {{explode(' ',$content['number_1'],2)[0]}}
                            </h1>
                        </div>
                        <p class="item_pg">
                            {{explode(' ',$content['number_1'],2)[1]}}
                        </p>
                    </li>
                    <li class="list_item item sct_col col-4">
                        <div class="item_title title">
                            <h1 class="title_main">
                                {{explode(' ',$content['number_2'],2)[0]}}
                            </h1>
                        </div>
                        <p class="item_pg">
                            {{explode(' ',$content['number_2'],2)[1]}}
                        </p>
                    </li>
                    <li class="list_item item sct_col col-4">
                        <div class="item_title title">
                            <h1 class="title_main">
                                {{explode(' ',$content['number_3'],2)[0]}}
                            </h1>
                        </div>
                        <p class="item_pg">
                            {{explode(' ',$content['number_3'],2)[1]}}
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sct" id="sct-partners">
        <div class="sct_cont">
            <div class="sct_carousel owl-carousel partners-carousel">
                <div class="item">
                    <div class="item_container"><img class="item_img" src="img/Part1.png" alt="#"></div>
                </div>
                <div class="item">
                    <div class="item_container"><img class="item_img" src="img/part2-bleu.png" alt="#"></div>
                </div>
                <div class="item">
                    <div class="item_container"><img class="item_img" src="img/part3-bleu.png" alt="#"></div>
                </div>
                <div class="item">
                    <div class="item_container"><img class="item_img" src="img/part4-bleu.png" alt="#"></div>
                </div>
                <div class="item">
                    <div class="item_container"><img class="item_img" src="img/part5-bleu.png" alt="#"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="sct" id="sct-contact">
        <div class="sct_cont">
            <div class="sct_row">
                <div class="sct_col col-4">
                    <div class="sct_title title">
                        <h1 class="title_main">
                            Contacter
                            <br>
                            U&D
                        </h1>
                    </div>
                    <div class="sct_cnt cnt">
                        <p class="cnt_pg">
                            <strong>Adresse :</strong>
                            278 rue de Rosny 93100
                            <br>
                            Montreuil
                        </p>
                        <p class="cnt_pg">
                            <strong>Télephone :</strong> 01 43 52 74 02
                        </p>
                    </div>
                </div>
                <form class="sct-form form sct_col col-8">
                    <div class="form_cont">
                        <div class="sct_row">
                            <div class="sct_col col-6">
                                <label for="tel" class="form_label">Votre téléphone</label>
                                <div class="input-phone"></div>
                                <input id="tel" type="tel" class="form_input input-text" placeholder="" name="">
                            </div>
                            <div class="sct_col col-6">
                                <label for="name" class="form_label">Nom Prénom</label>
                                <input id="name" type="text" class="form_input input-text" placeholder="" name="">
                            </div>
                        </div>
                        <div class="sct_row">
                            <div class="sct_col col-6">
                                <label for="email" class="form_label">Votre E-mail</label>
                                <input id="email" type="email" class="form_input input-phone" placeholder="" name="">
                            </div>
                            <div class="sct_col col-6">
                                <label for="subject" class="form_label">Sujet du message</label>
                                <input id="subject" type="text" class="form_input input-text" placeholder="" name="">
                            </div>
                        </div>
                        <div class="sct_row">
                            <div class="sct_col col-12">
                                <label for="message" class="form_label">Message</label>
                                <textarea id="message" class="form_input input-textarea" name=""></textarea>
                            </div>
                        </div>
                        <div class="sct_row">
                            <div class="sct_col col-6">
                                <input id="rappel" type="checkbox" class="form_input input-checkbox" placeholder=""
                                       name="">
                                <label for="rappel" class="form_label form_label-inline">Souhaitez vous être appellé
                                    ?</label>
                            </div>
                            <div class="sct_col col-6">
                                <input type="submit" class="form_input input-submit" value="Envoyer">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="sct-map" id="map">
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer_cont sct_row">
            <p class="sct_col col-2">
                U&D 2017 <br>
                tout droit reservé</p>
        </div>
        <a class="sct_button scroll-to" href="sct-intro"><span class="icon icon-top icon-prev"></span></a>
    </footer>
</main>
<script src="js/global.js"></script>
<script src="js/carousel.js"></script>
<script src="js/video.js"></script>
<script src="js/animations.js"></script>
<script>
    function initMap() {
        var paris = {lat: 48.8699607, lng: 2.4652697};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: paris
        });
        var marker = new google.maps.Marker({
            position: paris,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9a-A8TwipFNZSZ0LXtPBarlEdGJe_-AU&callback=initMap"></script>
</body>
</html>
