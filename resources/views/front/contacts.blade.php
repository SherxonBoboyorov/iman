@extends('layouts.front')

@section('content')


    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">@lang('main.contacts')</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about_us__menu__link">@lang('main.homepage')</a>
                    </li>

                    <li>
                        <a class="about_us__menu__link">@lang('main.contacts')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about_us end -->


    <!-- contacts start -->

    <div class="contacts">
        <div class="contacts__cart">
            <div class="contacts__list">

                <div class="contacts__cart__menu">
                    <div class="contacts__menu__item">
                        <ul class="contacts__menu__list">

                        @foreach($callbacks as $callback)
                            <li data-item="#m{{ $loop->iteration }}">
                                <a href="#{{ $loop->iteration }}" data-list="#{{ $loop->iteration }}" class="contacts__menu__link">{{ $callback->{'title_' . app()->getLocale()} }}</a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>


                <div class="contacts__map__cart">

                    <section class="contacts__map">

                    @foreach($callbacks as $callback)
                        <div class="contacts__map__item" id="{{ $loop->iteration }}">
                            {!! $callback->map !!}
                        </div>
                    @endforeach

                    </section>


                    <section class="contacts__map__contacts">

                    @foreach($callbacks as $callback)
                        <div id="m{{ $loop->iteration }}" class="contacts__map__contacts__item">
                            <button class="contacts__map__contacts__none"><i class="fa-solid fa-xmark"></i></button>
                            <h3 class="contacts__title__h3__contacts">{{ $callback->{'title_' . app()->getLocale()} }}</h3>

                            <ul class="contacts__map__contacts__menu">
                                <li>
                                    <h4 class="contacts__title__contacts">Телефон:</h4>
                                    <a href="tel:+998 99 730 01 79">{{ $callback->phone_number }}</a>
                                </li>

                                <li>
                                    <h4 class="contacts__title__contacts">Адрес:</h4>
                                    <a>{{ $callback->{'address_' . app()->getLocale()} }}</a>
                                </li>
                            </ul>
                        </div>
                    @endforeach

                    </section>

                </div>

            </div>
        </div>
    </div>
      <!-- contacts end -->

@endsection
