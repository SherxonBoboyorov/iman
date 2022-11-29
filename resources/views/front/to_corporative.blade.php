@extends('layouts.front')

@section('content')


    <!-- about_us start -->

    <div class="about_us">
        <section class="container">
            <div class="about_us__cart">
                <h2 class="new__title__h2">Корпоративным клиентам</h2>

                <ul class="about_us__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about_us__menu__link">Главная</a>
                    </li>

                    <li>
                        <a class="about_us__menu__link">Корпоративным клиентам</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about_us end -->


    <!-- to_corporative start -->

    <div class="to_corporative">
        <section class="container">
            <div class="to_corporative__cart">
              @foreach ($corporateclients as $corporateclient)
               <h2 class="new__title__h2">{{ $corporateclient->{'title_' . app()->getLocale()} }}</h2>
                <div class="to_corporative__text clearfix">
                    <p>
                        {!! $corporateclient->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
               @endforeach
            </div>
        </section>
    </div>

    <!-- to_corporative end -->

@endsection
