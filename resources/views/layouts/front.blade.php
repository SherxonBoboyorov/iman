<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/foto/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/foto/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/foto/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/foto/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/foto/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('front/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/fancybox-main.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
    <title>Iman</title>
</head>
<body>

    <!-- header start -->

    <header class="header">
        <section class="container">
            <div class="header__cart">
                <div class="header__list">

                    <div class="header__logo">
                        <a href="{{ route('/') }}">
                            <img src="{{ asset('front/foto/logo.svg') }}" alt="logo">
                        </a>
                    </div>

                    <menu class="sidenav" id="slide-out">
                        <ul class="header__menu">
                            <li>
                                <a href="{{ route('/') }}" class="header__menu__link">Главная</a>
                            </li>

                            <li>
                                <a href="{{ route('catalog') }}" class="header__menu__link">каталог</a>
                            </li>

                            <li>
                                <a href="{{ route('articles') }}" class="header__menu__link">новинки</a>
                            </li>

                            <li>
                                <a href="{{ route('holidaysets') }}" class="header__menu__link">Праздничные наборы</a>
                            </li>

                            <li>
                                <a href="{{ route('forcelebrations') }}" class="header__menu__link">Для торжеств </a>
                            </li>

                            <li>
                                <a href="{{ route('corporative') }}" class="header__menu__link">Корпоративным клиентам</a>
                            </li>

                            <li>
                                <a href="{{ route('recipenews') }}" class="header__menu__link">Рецепты</a>
                            </li>

                            <li>
                                <a href="{{ route('about') }}" class="header__menu__link">О нас </a>
                            </li>

                            <li>
                                <a href="{{ route('contact') }}" class="header__menu__link">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                </a>
                            </li>
                        </ul>
                    </menu>

                    <div class="header__list__cart">

                    <!-- language start -->

                    <div class="header__ru">
                        <ul>

                        <div class="header__ru_cart dropdown-trigger"data-target='dropdown1'>
                              <a data-target='dropdown1' class="header__en__link">{{ strtoupper(app()->getLocale()) }}</a>
                              <span><i class="fas fa-angle-down"></i></span>
                        </div>

                        <div class="header__ru_none dropdown-content" id='dropdown1'>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if($localeCode != app()->getLocale())
                                <div class="header__ru_list @if($localeCode == app()->getLocale()) active @endif">
                                    <a rel="alternate" class="header__en__link" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ strtoupper($localeCode) }}
                                    </a>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </ul>
                    </div>

                    <!-- language start -->

                    <button data-target="slide-out" class="header__burger__menu sidenav-trigger">
                        <i class="fas fa-bars"></i>
                    </button>

                    </div>


                </div>
            </div>
        </section>
    </header>

    <!-- header end -->

    @yield('content')

    <!-- footer start -->

    <footer>
        <div class="footer">
            <section class="container">
                <div class="footer__cart">
                    <div class="footer__list">
                        <div class="footer__list__item">
                            <div class="footer__logo">
                                <a href="{{ route('/') }}">
                                    <img src="{{ asset('front/foto/logo_footer.svg') }}" alt="logo_footer">
                                </a>
                            </div>

                            <ul class="footer__menu__icons">
                                <li>
                                    <a href="https://www.instagram.com/" class="footer__link__icons">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.facebook.com/" class="footer__link__icons">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://telegram.org/" class="footer__link__icons">
                                        <i class="fab fa-telegram-plane"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer__cart__item">
                            <ul class="footer__cart__menu">
                                <li>
                                    <a href="{{ route('/') }}" class="footer__link__menu">Главная</a>
                                </li>

                                <li>
                                    <a href="#!" class="footer__link__menu">Продукция</a>
                                </li>

                                <li>
                                    <a href="{{ route('articles') }}" class="footer__link__menu">новинки</a>
                                </li>

                                <li>
                                    <a href="{{ route('holidaysets') }}" class="footer__link__menu">Праздничные наборы</a>
                                </li>
                            </ul>

                            <ul class="footer__cart__menu">
                                <li>
                                    <a href="{{ route('forcelebrations') }}" class="footer__link__menu">Для торжеств</a>
                                </li>

                                <li>
                                    <a href="{{ route('corporative') }}" class="footer__link__menu">Корпоративным клиентам</a>
                                </li>

                                <li>
                                    <a href="{{ route('recipenews') }}" class="footer__link__menu">Рецепты</a>
                                </li>

                                <li>
                                    <a href="{{ route('about') }}" class="footer__link__menu">О нас</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="footer__bottom">
                <section class="container">
                    <div class="footer__bottom__list">
                        <h4 class="footer__bottom__title">«Iman» Все права защищены</h4>
                        <h4 class="footer__bottom__title">© Copyright 2021 - Web developed by SOS Group</h4>
                    </div>
                </section>
            </div>
        </div>
    </footer>

    <!-- footer end -->


    <script src="{{ asset('front/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('front/js/materialize.min.js') }}"></script>
    <script src="{{ asset('front/js/fancyapps-ui.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('front/js/slick.min.js') }}"></script>
    <script src="{{ asset('front/js/fancybox_main.js') }}"></script>
    <script src="{{ asset('front/js/mar_ru.js') }}"></script>
    <script src="{{ asset('front/js/slic.js') }}"></script>
    <script src="{{ asset('front/js/index.js') }}"></script>
    <script src="{{ asset('front/js/map.js') }}"></script>
</body>
</html>
