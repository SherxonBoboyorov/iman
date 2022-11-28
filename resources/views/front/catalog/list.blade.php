@extends('layouts.front')

@section('content')

    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">Шоколадные конфеты</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('catalog') }}" class="about_us__menu__link">Каталог</a>
                    </li>

                    <li>
                        <a class="about_us__menu__link">Шоколадные конфеты</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about_us end -->


    <!-- catalog_in start -->

    <div class="catalog_in">
        <section class="container">
            <div class="catalog_in__cart">
                <div class="catalog_in__list">
                  @foreach ($products as $product)
                    <div class="new__item">
                        <div class="new__img">
                            <img src="{{ asset($product->image) }}" alt="new">
                        </div>

                        <div class="new__button">
                            <a href="{{ route('product', $product->{'slug_' . app()->getLocale()}) }}" class="new__link">Подробнее</a>
                        </div>

                        <h3 class="new__title__h3">{{ $product->{'title_' . app()->getLocale()} }}</h3>
                        <div class="new__text">
                            <p>{!! $product->{'description_' . app()->getLocale()} !!}</p>
                        </div>
                        <h4 class="new__sum">{{ $product->price }}<span>сум</span></h4>
                    </div>
                   @endforeach
                </div>

                <ul class="catalog_in__pagination">
                    <li>
                        <a href="#!" class="catalog_in__pagination__next"><i class="fas fa-chevron-left"></i></a>
                    </li>

                    <li>
                        <a href="#!" class="catalog_in__pagination__link active">1</a>
                    </li>

                    <li>
                        <a href="#!" class="catalog_in__pagination__link">2</a>
                    </li>

                    <li>
                        <a href="#!" class="catalog_in__pagination__link">3</a>
                    </li>

                    <li>
                        <a href="#!" class="catalog_in__pagination__next"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- catalog_in end -->

@endsection
