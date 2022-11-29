@extends('layouts.front')

@section('content')

    <!-- slider start -->

    <div class="slider">
        <div class="slider__list">
            @foreach ($sliders as $slider)
             <div class="slider__item" style="background-image: url({{ asset($slider->image) }});">
                <section class="container">
                    <div class="slider__cart">
                        <h1 class="slider__title__h1">{{ $slider->{'title_' . app()->getLocale()} }}</h1>
                        <div class="slider__text">
                            <p>{{ $slider->{'description_' . app()->getLocale()} }}</p>
                        </div>
                    </div>
                </section>
            </div>
          @endforeach
        </div>
    </div>

    <!-- slider end -->


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

                        <a href="{{ route('products', ['category' => $category->id]) }}" class="catalog__link">В каталог</a>
                    </div>
                  @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Catalog end -->


    <!-- new start -->

    <div class="new">
        <section class="container">
            <div class="new__cart">
                <h2 class="new__title__h2">Новинки</h2>

                <div class="new__list">
                   @foreach ($articles as $article)
                    <div class="new__item">
                        <div class="new__img">
                            <img src="{{ asset($article->image) }}" alt="new">
                        </div>

                        <div class="new__button">
                            <a href="{{ route('article', $article->{'slug_' . app()->getLocale()}) }}" class="new__link">Подробнее</a>
                        </div>

                        <h3 class="new__title__h3">{{ $article->{'title_' . app()->getLocale()} }}</h3>
                        <div class="new__text">
                            <p>{!! $article->{'description_' . app()->getLocale()} !!}</p>
                        </div>
                        <h4 class="new__sum">{{ $article->price }}<span>сум</span></h4>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- new end -->


    <!-- about start -->

    <div class="about">
        <section class="container">
            <div class="about__cart">
                <h2 class="new__title__h2">О нас</h2>

                @foreach ($pages as $page)
                 <div class="about__text">
                    <p>
                        {!! $page->{'content_' . app()->getLocale()} !!}
                    </p>
                 </div>
                @endforeach

                <a href="{{ route('about') }}" class="about__link">Подробнее</a>
            </div>
        </section>
    </div>

    <!-- about end -->


    <!-- Opinion of our gourmets start -->

    <div class="opinion_of">
        <section class="container">
            <div class="opinion_of__cart">

                <h2 class="new__title__h2">Мнение наших гурманов</h2>

                <div class="opinion_of__list">
                  @foreach ($opinions as $opinion)
                    <div class="opinion_of__item">
                        <div class="opinion_of__text">
                            <p>
                                {!! $opinion->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>

                        <div class="opinion_of__cart__list">
                            <div class="opinion_of__icons">
                                <img src="{{ asset('front/foto/opinion_of.svg') }}" alt="opinion_of">
                            </div>

                            <section>
                                <h3 class="opinion_of__title__h3">{{ $opinion->{'name_' . app()->getLocale()} }}</h3>
                                <h4 class="opinion_of__title__h4">{{ $opinion->{'company_name_' . app()->getLocale() } }}</h4>
                            </section>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Opinion of our gourmets end -->


    <!-- Latest publications start -->

    <div class="publications">
        <section class="container">
            <div class="publications__cart">
                <h2 class="new__title__h2">Последние публикации</h2>

                <div class="publications__list owl-carousel">
                    @foreach ($publications as $publication)

                    <div class="publications__item">
                        <a href="#!">

                            <div class="publications__cart__list">
                                <div class="publications__cart__item">
                                    <img src="{{ asset('front/foto/publications_logo.png') }}" alt="publications">
                                    <h3 class="publications__title__h3">Iman</h3>
                                </div>

                                <h4 class="publications__data">{{ $publication->created_at->diffForHumans() }}</h4>
                            </div>

                            <div class="publications__img">
                                <img src="{{ asset($publication->image) }}" alt="publications">
                            </div>

                            <div class="publications__text">
                                <p>{!! $publication->{'content_' . app()->getLocale()} !!}</p>
                            </div>

                        </a>
                    </div>
                  @endforeach
                </div>
                <div class="publications__button">
                    <a href="https://www.instagram.com/" class="publications__link">Подпишитесь на нас <span><i class="fab fa-instagram"></i></span></a>
                </div>
            </div>
        </section>
    </div>

    <!-- Latest publications end -->

    @endsection

