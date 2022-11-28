@extends('layouts.front')

@section('content')

    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">Consectetur adipiscing elit</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="new.html" class="about_us__menu__link">Шоколадные конфеты</a>
                    </li>

                    <li>
                        <a href="new_in.html" class="about_us__menu__link">Consectetur adipiscing elit</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about_us end -->


    <!-- catalog_inside start -->

    <div class="catalog_inside">
        <section class="container">
            <div class="catalog_inside__cart">

                <div class="catalog_inside__list">
                    <div class="catalog_inside__img">
                        <img src="{{ asset($article->image) }}" alt="new">
                    </div>

                    <section>
                        <h2 class="new__title__h2">{{ $article->{'title_' . app()->getLocale()} }}</h2>

                        <ul class="catalog_inside__menu">
                            <li>
                                <span>Упаковка:</span>
                                <h4 class="catalog_inside__title__h4">{{ $article->{'package_' . app()->getLocale()} }}</h4>
                            </li>

                            <li>
                                <span>Вес:</span>
                                <h4 class="catalog_inside__title__h4">{{ $article->weight }} гр</h4>
                            </li>

                            <li>
                                <span>Состав:</span>
                                <h4 class="catalog_inside__title__h4">{{ $article->{'compound_' . app()->getLocale()} }}</h4>
                            </li>

                            <li>
                                <span>Срок годности:</span>
                                <h4 class="catalog_inside__title__h4">{{ $article->{'best_before_date_' . app()->getLocale()} }}</h4>
                            </li>
                        </ul>

                        <h3 class="catalog_inside__title__h3">{{ $article->price }}<span>сум</span></h3>

                        <a href="#!" class="catalog_inside__link">Заказать</a>
                    </section>
                </div>

                <h2 class="new__title__h2">Описание</h2>

                <div class="catalog_inside__text">
                    <p>
                        {!! $article->{'description_' . app()->getLocale()} !!}
                    </p>
                </div>

            </div>
        </section>
    </div>

    <!-- catalog_inside end -->

@endsection
