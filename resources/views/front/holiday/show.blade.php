@extends('layouts.front')

@section('content')

    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">{{ $holidayset->{'title_' . app()->getLocale()} }}</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('holidaysets') }}" class="about_us__menu__link">Праздничные наборы</a>
                    </li>

                    <li>
                        <a class="about_us__menu__link">{{ $holidayset->{'title_' . app()->getLocale()} }}</a>
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
                        <img src="{{ asset($holidayset->image) }}" alt="new">
                    </div>

                    <section>
                        <h2 class="new__title__h2">{{ $holidayset->{'title_' . app()->getLocale()} }}</h2>

                        <ul class="catalog_inside__menu">
                            <li>
                                <span>Упаковка:</span>
                                <h4 class="catalog_inside__title__h4">{{ $holidayset->{'package_' . app()->getLocale()} }}</h4>
                            </li>

                            <li>
                                <span>Вес:</span>
                                <h4 class="catalog_inside__title__h4">{{ $holidayset->weight }} гр</h4>
                            </li>

                            <li>
                                <span>Состав:</span>
                                <h4 class="catalog_inside__title__h4">{{ $holidayset->{'compound_' . app()->getLocale()} }}</h4>
                            </li>

                            <li>
                                <span>Срок годности:</span>
                                <h4 class="catalog_inside__title__h4">{{ $holidayset->{'best_before_date_' . app()->getLocale()} }}</h4>
                            </li>
                        </ul>

                        <h3 class="catalog_inside__title__h3">{{ $holidayset->price }}<span>сум</span></h3>

                        <a href="#!" class="catalog_inside__link">Заказать</a>
                    </section>
                </div>

                <h2 class="new__title__h2">Описание</h2>

                <div class="catalog_inside__text">
                    <p>
                        {!! $holidayset->{'description_' . app()->getLocale()} !!}
                    </p>
                </div>

            </div>
        </section>
    </div>

    <!-- catalog_inside end -->

@endsection
