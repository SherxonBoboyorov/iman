@extends('layouts.front')

@section('content')

    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">{{ $article->{'title_' . app()->getLocale()} }}</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('articles') }}" class="about_us__menu__link">@lang('main.novelties')</a>
                    </li>

                    <li>
                        <a class="about_us__menu__link">{{ $article->{'title_' . app()->getLocale()} }}</a>
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
                                <span>@lang('main.package'):</span>
                                <h4 class="catalog_inside__title__h4">{{ $article->{'package_' . app()->getLocale()} }}</h4>
                            </li>

                            <li>
                                <span>@lang('main.the_weight'):</span>
                                <h4 class="catalog_inside__title__h4">{{ $article->weight }} @lang('main.gr')</h4>
                            </li>

                            <li>
                                <span>@lang('main.compound'):</span>
                                <h4 class="catalog_inside__title__h4">{{ $article->{'compound_' . app()->getLocale()} }}</h4>
                            </li>

                            <li>
                                <span>@lang('main.best_before_date'):</span>
                                <h4 class="catalog_inside__title__h4">{{ $article->{'best_before_date_' . app()->getLocale()} }}</h4>
                            </li>
                        </ul>

                        <h3 class="catalog_inside__title__h3">{{ $article->price }}<span>@lang('main.sum')</span></h3>

                        <a href="https://telegram.org/" class="catalog_inside__link">@lang('main.order')</a>
                    </section>
                </div>

                <h2 class="new__title__h2">@lang('main.description')</h2>

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
