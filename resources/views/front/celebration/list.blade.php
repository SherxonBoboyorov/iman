@extends('layouts.front')

@section('content')

    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">@lang('main.for_celebrations')</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about_us__menu__link">@lang('main.homepage')</a>
                    </li>

                    <li>
                        <a class="about_us__menu__link">@lang('main.for_celebrations')</a>
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

                <h2 class="new__title__h2">@lang('main.holidays_with_IMAN')</h2>

                <div class="new_in__list">
                  @foreach ($forcelebrations as $forcelebration)
                    <div class="new_in__item">

                        <div class="new_in__img">
                            <img src="{{ asset($forcelebration->image) }}" alt="new_in">
                        </div>
                        <h3 class="new_in__title__h3">{{ $forcelebration->{'title_' . app()->getLocale()} }}</h3>

                        <a href="{{ route('forcelebration', $forcelebration->{'slug_' . app()->getLocale()}) }}" class="new_in__link">@lang('main.more')</a>
                    </div>
                   @endforeach
                </div>

            {{ $forcelebrations->links("vendor.pagination.pagination")}}

            </div>
        </section>
    </div>

    <!-- new_in end -->

@endsection
