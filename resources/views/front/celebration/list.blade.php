@extends('layouts.front')

@section('content')

    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">Праздничные наборы</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about_us__menu__link">Главная</a>
                    </li>

                    <li>
                        <a class="about_us__menu__link">Праздничные наборы</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about_us end -->


    <!-- new_in start -->

    <div class="new_in">
        <section class="container">
            <div class="new_in__cart">

                <h2 class="new__title__h2">Праздники вместе с ИМАН</h2>

                <div class="new_in__list">
                  @foreach ($forcelebrations as $forcelebration)
                    <div class="new_in__item">

                        <div class="new_in__img">
                            <img src="{{ asset($forcelebration->image) }}" alt="new_in">
                        </div>
                        <h3 class="new_in__title__h3">{{ $forcelebration->{'title_' . app()->getLocale()} }}</h3>

                        <a href="{{ route('forcelebration', $forcelebration->{'slug_' . app()->getLocale()}) }}" class="new_in__link">Подробнее</a>
                    </div>
                   @endforeach
                </div>

            {{ $forcelebrations->links("vendor.pagination.pagination")}}

            </div>
        </section>
    </div>

    <!-- new_in end -->

@endsection
