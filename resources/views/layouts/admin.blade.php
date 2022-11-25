<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">
    @yield('custom_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ route('homeAdmin') }}" class="brand-link">
            <style>
                .brand-link {
                    background-color: #007bff;
                }
            </style>
            <span class="brand-text font-weight-light" style="margin-left: 80px">Iman</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    {{-- start--}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Слайдер
                             <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('slider.index') }}" class="nav-link">
                               <p>Все</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('slider.create') }}" class="nav-link">
                               <p>Добавить</p>
                            </a>
                        </li>
                        </ul>
                     </li>
                    {{-- end --}}

                    {{-- start--}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Каталог
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('category.index') }}" class="nav-link">
                            <p>Все</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category.create') }}" class="nav-link">
                            <p>Добавить</p>
                            </a>
                        </li>
                        </ul>
                     </li>
                    {{-- end --}}

                    {{-- start --}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Каталог-Продукты
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('product.index') }}" class="nav-link">
                            <p>Все</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product.create') }}" class="nav-link">
                            <p>Добавить</p>
                            </a>
                        </li>
                        </ul>
                     </li>
                    {{-- end --}}

                    {{-- start --}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Новинки
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('article.index') }}" class="nav-link">
                            <p>Все</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('article.create') }}" class="nav-link">
                            <p>Добавить</p>
                            </a>
                        </li>
                        </ul>
                      </li>
                    {{-- end --}}

                    {{-- start --}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            О нас
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('page.index') }}" class="nav-link">
                            <p>Все</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('article.create') }}" class="nav-link">
                            <p>Добавить</p>
                            </a>
                        </li> --}}
                        </ul>
                     </li>
                    {{-- end --}}

                    {{-- start --}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Праздничные наборы
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('holidayset.index') }}" class="nav-link">
                            <p>Все</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('holidayset.create') }}" class="nav-link">
                            <p>Добавить</p>
                            </a>
                        </li>
                        </ul>
                      </li>
                    {{-- end --}}

                    {{-- start --}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Для торжеств
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('forcelebration.index') }}" class="nav-link">
                            <p>Все</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('forcelebration.create') }}" class="nav-link">
                            <p>Добавить</p>
                            </a>
                        </li>
                        </ul>
                      </li>
                    {{-- end  --}}

                    {{-- start --}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Корпорати клиентам
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('corporateclient.index') }}" class="nav-link">
                            <p>Все</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('corporateclient.create') }}" class="nav-link">
                            <p>Добавить</p>
                            </a>
                        </li> --}}
                        </ul>
                      </li>
                    {{-- end --}}

                    {{-- start --}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Рецепты
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('recipe.index') }}" class="nav-link">
                            <p>Все</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('recipe.create') }}" class="nav-link">
                            <p>Добавить</p>
                            </a>
                        </li>
                        </ul>
                      </li>
                    {{-- end  --}}

                    {{-- start --}}
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Рецепты Новости
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('recipenew.index') }}" class="nav-link">
                            <p>Все</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('recipenew.create') }}" class="nav-link">
                            <p>Добавить</p>
                            </a>
                        </li>
                        </ul>
                      </li>
                    {{-- end --}}
                    
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper" style="background-color: rgb(241, 233, 222)">
        @yield('content')
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>

<script src="/admin/plugins/jquery/jquery.min.js"></script>
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<script src="/admin/plugins/sparklines/sparkline.js"></script>
<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="/admin/dist/js/adminlte.js"></script>
<script src="/admin/dist/js/demo.js"></script>
<script src="/admin/dist/js/pages/dashboard.js"></script>

<!-- App js -->
<script src="{{ asset('admin/js/app.js') }}"></script>
@yield('custom_js')
</body>
</html>
