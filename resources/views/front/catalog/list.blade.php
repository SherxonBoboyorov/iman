@extends('layouts.front')

@section('content')

    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">@lang('main.chocolate_candies')</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('catalog') }}" class="about_us__menu__link">@lang('main.catalog')</a>
                    </li>

                    <li>
                        <a class="about_us__menu__link">@lang('main.chocolate_candies')</a>
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
                            <a href="{{ route('product', $product->{'slug_' . app()->getLocale()}) }}" class="new__link">@lang('main.more')</a>
                        </div>

                        <h3 class="new__title__h3">{{ $product->{'title_' . app()->getLocale()} }}</h3>
                        <div class="new__text">
                            <p>{!! $product->{'description_' . app()->getLocale()} !!}</p>
                        </div>
                        <h4 class="new__sum">{{ $product->price }}<span>@lang('main.sum')</span></h4>
                    </div>
                   @endforeach
                </div>

                {{ $products->links("vendor.pagination.pagination")}}

            </div>
        </section>
    </div>

    <!-- catalog_in end -->

@endsection
