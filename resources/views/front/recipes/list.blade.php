@extends('layouts.front')

@section('content')

    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">Рецепты</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about_us__menu__link">Главная</a>
                    </li>

                    <li>
                        <a class="about_us__menu__link">Рецепты</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about_us end -->


    <!-- Recipes start -->

    <div class="recipes">
        <section class="container">
            <div class="recipes__cart">
                <h2 class="new__title__h2">Откроем секрет ИМАН – Как рождается шоколадное чудо!</h2>
                <ul class="recipes__filter">
                    @foreach ($recipes as $recipe)
                    <li>
                        <a href="#!" class="recipes__filter__link active">{{ $recipe->{'title_' . app()->getLocale()} }}</a>
                    </li>

                    @endforeach
                </ul>


                <div class="recipes__list">
                  @foreach ($recipenews as $recipenew)
                    <div class="recipes__item">
                        <a href="{{ route('recipenew', $recipenew->{'slug_' . app()->getLocale()}) }}">
                            <div class="recipes__img">
                                <img src="{{ asset($recipenew->image) }}" alt="recipes">

                                <!-- play start -->

                                <div class="button__min is-play" href="#">
                                    <div class="button-outer-circle has-scale-animation"></div>
                                    <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                                    <div class="button-icon is-play">
                                        <img class="about_contint_in__video__img__play" alt="All" src="{{ asset('front/foto/play.svg') }}">
                                    </div>
                                </div>

                                <!-- play end -->
                            </div>

                            <h3 class="recipes__title__h3">{{ $recipenew->{'title_' . app()->getLocale()} }}</h3>
                        </a>
                    </div>
                  @endforeach
                </div>

                {{ $recipenews->links("vendor.pagination.pagination")}}

            </div>
        </section>
    </div>

    <!-- Recipes end -->

@endsection
