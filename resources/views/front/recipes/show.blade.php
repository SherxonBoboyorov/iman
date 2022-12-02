@extends('layouts.front')

@section('content')

    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">{{ $recipenew->{'title_' .app()->getLocale()} }}</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('recipenews', ['id' => 0]) }}" class="about_us__menu__link">@lang('main.recipes')</a>
                    </li>

                    <li>
                        <a class="about_us__menu__link">{{ $recipenew->{'title_' .app()->getLocale()} }}</a>
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
                    <a data-fancybox="video-gallery" href="{{ $recipenew->frame }}">
                        <img src="{{ asset($recipenew->image) }}" alt="video"/>
                        <!-- play start -->

                        <div class="button__min is-play" href="#">
                            <div class="button-outer-circle has-scale-animation"></div>
                            <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                            <div class="button-icon is-play">
                                <img class="about_contint_in__video__img__play" alt="All" src="{{ asset('front/foto/play.svg') }}">
                            </div>
                        </div>

                        <!-- play end -->
                    </a>
                </div>

                <h3 class="recipes_in__title__h3">{{ $recipenew->{'title_' .app()->getLocale()} }}</h3>

            </div>
        </section>
    </div>

    <!-- recipes_in end -->

@endsection
