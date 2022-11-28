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

                        <a href="#!" class="catalog__link">В каталог</a>
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

                <div class="about__text">
                    <p>
                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                    </p>
                </div>

                <a href="about.html" class="about__link">Подробнее</a>
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

                    <div class="opinion_of__item">
                        <div class="opinion_of__text">
                            <p>
                                Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est
                            </p>
                        </div>

                        <div class="opinion_of__cart__list">
                            <div class="opinion_of__icons">
                                <img src="foto/opinion_of.svg" alt="opinion_of">
                            </div>

                            <section>
                                <h3 class="opinion_of__title__h3">John Doe</h3>
                                <h4 class="opinion_of__title__h4">ООО “Вкусвилл”</h4>
                            </section>
                        </div>
                    </div>

                    <div class="opinion_of__item">
                        <div class="opinion_of__text">
                            <p>
                                Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                            </p>
                        </div>

                        <div class="opinion_of__cart__list">
                            <div class="opinion_of__icons">
                                <img src="foto/opinion_of.svg" alt="opinion_of">
                            </div>

                            <section>
                                <h3 class="opinion_of__title__h3">ООО “Sigma”</h3>
                                <h4 class="opinion_of__title__h4">ООО “Вкусвилл”</h4>
                            </section>
                        </div>
                    </div>

                    <div class="opinion_of__item">
                        <div class="opinion_of__text">
                            <p>
                                Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est
                            </p>
                        </div>

                        <div class="opinion_of__cart__list">
                            <div class="opinion_of__icons">
                                <img src="foto/opinion_of.svg" alt="opinion_of">
                            </div>

                            <section>
                                <h3 class="opinion_of__title__h3">John Doe</h3>
                                <h4 class="opinion_of__title__h4">ООО “Вкусвилл”</h4>
                            </section>
                        </div>
                    </div>

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

                    <div class="publications__item">
                        <a href="#!">

                            <div class="publications__cart__list">
                                <div class="publications__cart__item">
                                    <img src="foto/publications_logo.png" alt="publications">
                                    <h3 class="publications__title__h3">Iman</h3>
                                </div>

                                <h4 class="publications__data">2 дня назад</h4>
                            </div>

                            <div class="publications__img">
                                <img src="foto/publications_1.png" alt="publications">
                            </div>

                            <div class="publications__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore sed do</p>
                            </div>

                        </a>
                    </div>

                    <div class="publications__item">
                        <a href="#!">

                            <div class="publications__cart__list">
                                <div class="publications__cart__item">
                                    <img src="foto/publications_logo.png" alt="publications">
                                    <h3 class="publications__title__h3">Iman</h3>
                                </div>

                                <h4 class="publications__data">10 дней назад</h4>
                            </div>

                            <div class="publications__img">
                                <img src="foto/publications_2.png" alt="publications">
                            </div>

                            <div class="publications__text">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo sed do</p>
                            </div>

                        </a>
                    </div>

                    <div class="publications__item">
                        <a href="#!">

                            <div class="publications__cart__list">
                                <div class="publications__cart__item">
                                    <img src="foto/publications_logo.png" alt="publications">
                                    <h3 class="publications__title__h3">Iman</h3>
                                </div>

                                <h4 class="publications__data">20 дней назад</h4>
                            </div>

                            <div class="publications__img">
                                <img src="foto/publications_3.png" alt="publications">
                            </div>

                            <div class="publications__text">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            </div>

                        </a>
                    </div>

                    <div class="publications__item">
                        <a href="#!">

                            <div class="publications__cart__list">
                                <div class="publications__cart__item">
                                    <img src="foto/publications_logo.png" alt="publications">
                                    <h3 class="publications__title__h3">Iman</h3>
                                </div>

                                <h4 class="publications__data">2 дня назад</h4>
                            </div>

                            <div class="publications__img">
                                <img src="foto/publications_1.png" alt="publications">
                            </div>

                            <div class="publications__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore sed do</p>
                            </div>

                        </a>
                    </div>

                </div>

                <div class="publications__button">
                    <a href="#!" class="publications__link">Подпишитесь на нас <span><i class="fab fa-instagram"></i></span></a>
                </div>
            </div>
        </section>
    </div>

    <!-- Latest publications end -->

    @endsection

