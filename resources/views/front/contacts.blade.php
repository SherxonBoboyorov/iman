@extends('layouts.front')

@section('content')


    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">Контакты</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about_us__menu__link">Главная</a>
                    </li>

                    <li>
                        <a class="about_us__menu__link">Контакты</a>
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

                            <li data-item="#m1">
                                <a href="#!" data-list="#1" class="contacts__menu__link">Lorem ipsum dolor sit</a>
                            </li>

                            <li data-item="#m2">
                                <a href="#!" data-list="#2" class="contacts__menu__link">consectetur adipiscing</a>
                            </li>

                            <li data-item="#m3">
                                <a href="#!" data-list="#3" class="contacts__menu__link">tempor incididunt ut</a>
                            </li>

                        </ul>
                    </div>
                </div>


                <div class="contacts__map__cart">

                    <section class="contacts__map">

                        <div class="contacts__map__item" id="1">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d47952.51451331787!2d69.30274153281249!3d41.30816404800894!3m2!1i1024!2i768!4f13.1!2m1!1z0J3QsNC80LDQvdCz0LDQvdGB0LrQuNC5INC-0LHQu9GB0YLRjCwg0LMu0J3QsNC80LDQvdCz0LDQvSwg0YPQuy4g0KHQvtC5INCx0YPQudC4LCA1Mw!5e0!3m2!1sru!2s!4v1667624258479!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="contacts__map__item" id="2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.419788598194!2d69.24192121572558!3d41.3214842080404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b6cc3b4acb5%3A0x13527f43b97af21e!2z0KLQsNGI0LrQtdC90YLRgdC60LjQuSDQs9C-0YDQvtC00YHQutC-0Lkg0YTQuNC70LjQsNC7INCd0JrQrdCY0KEgItCj0LfQsdC10LrQuNC90LLQtdGB0YIi!5e0!3m2!1sru!2s!4v1667624934389!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="contacts__map__item" id="3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d47942.670151301776!2d69.20909053983371!3d41.32154737016561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0KTQuNC70LjQsNC7ICJLYWZpbC1TdWfigJh1cnRhLVBveXRheHQ!5e0!3m2!1sru!2s!4v1667624972714!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </section>


                    <section class="contacts__map__contacts">

                        <div id="m1" class="contacts__map__contacts__item">
                            <button class="contacts__map__contacts__none"><i class="fa-solid fa-xmark"></i></button>
                            <h3 class="contacts__title__h3__contacts">consectetur adipiscing</h3>

                            <ul class="contacts__map__contacts__menu">
                                <li>
                                    <h4 class="contacts__title__contacts">Телефон:</h4>
                                    <a href="tel:+998 99 730 01 79">+998 99 730 01 79</a>
                                </li>

                                <li>
                                    <h4 class="contacts__title__contacts">Адрес:</h4>
                                    <a>Узбекистан, г. Ташкент Ул. Садыка Азимова, 68</a>
                                </li>
                            </ul>
                        </div>

                        <div id="m2" class="contacts__map__contacts__item">
                            <button class="contacts__map__contacts__none"><i class="fa-solid fa-xmark"></i></button>
                            <h3 class="contacts__title__h3__contacts">consectetur adipiscing</h3>
                            <ul class="contacts__map__contacts__menu">
                                <li>
                                    <h4 class="contacts__title__contacts">Телефон:</h4>
                                    <a href="tel:+99 893 505 45 05">+99 893 505 45 05</a>
                                </li>

                                <li>
                                    <h4 class="contacts__title__contacts">Адрес:</h4>
                                    <a>Узбекистан, г. Ташкент Ул. Садыка Азимова, 68</a>
                                </li>
                            </ul>
                        </div>

                        <div id="m3" class="contacts__map__contacts__item">
                            <button class="contacts__map__contacts__none"><i class="fa-solid fa-xmark"></i></button>
                            <h3 class="contacts__title__h3__contacts">consectetur adipiscing</h3>

                            <ul class="contacts__map__contacts__menu">
                                <li>
                                    <h4 class="contacts__title__contacts">Телефон:</h4>
                                    <a href="tel:+99 893 505 45 00">+99 893 505 45 00</a>
                                </li>

                                <li>
                                    <h4 class="contacts__title__contacts">Адрес:</h4>
                                    <a>Узбекистан, г. Ташкент Ул. Садыка Азимова, 68</a>
                                </li>
                            </ul>
                        </div>

                    </section>

                </div>

            </div>
        </div>
    </div>

    <!-- contacts end -->

@endsection
