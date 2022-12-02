@extends('layouts.front')

@section('content')

    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">@lang('main.catalog')</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about_us__menu__link">@lang('main.homepage')</a>
                    </li>

                    <li class="about_us__menu__link">@lang('main.catalog')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about_us end -->


    <!-- Catalog start -->

    <div class="catalog">
        <section class="container">
            <div class="catalog__cart">
                <div class="catalog__list">
                  @foreach ($categories as $category)
                    <div class="catalog__item">
                        <div class="catalog__img">
                            <img src="{{ asset($category->image) }}" alt="catalog">
                        </div>

                        <h3 class="catalog__title__h3">{{ $category->{'title_' . app()->getLocale()} }}</h3>

                        <div class="catalog__text">
                            <p>
                                {!! $category->{'description_' . app()->getLocale()} !!}
                            </p>
                        </div>

                        <a href="{{ route('products', ['id' => $category->id]) }}" class="catalog__link">@lang('main.to_catalog')</a>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Catalog end -->

@endsection
