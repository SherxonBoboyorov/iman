@extends('layouts.front')

@section('content')

    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">Consectetur adipiscing elit</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="recipes.html" class="about_us__menu__link">Рецепты</a>
                    </li>

                    <li>
                        <a href="recipes_in.html" class="about_us__menu__link">Consectetur adipiscing elit</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about_us end -->


    <!-- recipes_in start -->

    <div class="recipes_in">
        <section class="container">
            <div class="recipes_in__cart">

                <div class="recipes_in__videos">
                    <a data-fancybox="video-gallery" href="https://youtu.be/RHyB2DeKQRs?list=RDGEOcT0gvOGc">
                        <img src="foto/new_in_4.png" alt="video"/>
                        <!-- play start -->

                        <div class="button__min is-play" href="#">
                            <div class="button-outer-circle has-scale-animation"></div>
                            <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                            <div class="button-icon is-play">
                                <img class="about_contint_in__video__img__play" alt="All" src="foto/play.svg">
                            </div>
                        </div>

                        <!-- play end -->
                    </a>
                </div>

                <h3 class="recipes_in__title__h3">Consectetur adipiscing elit</h3>

            </div>
        </section>
    </div>

    <!-- recipes_in end -->

@endsection
