@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Список Последние публикации</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="card">
                <div class="card-body">

                    @if(session('message'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('message') }}
                        </div>

                    @endif

                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 2%;">#</th>
                            <th>Изображение</th>
                            <th>Контент [Uzbek]</th>
                            <th>Контент [Russian]</th>
                            <th>Контент [English]</th>
                            <th colspan="2" style="width: 2%;">Действий</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($publications as $publication)
                            <tr>
                                <td>{{ $publication->id }}</td>
                                <td>
                                    <img src="{{ asset($publication->image) }}" alt="" width="75" height="75">
                                </td>
                                <td class="table_cart_list">{!! $publication->content_uz !!}</td>
                                <td class="table_cart_list">{!! $publication->content_ru !!}</td>
                                <td class="table_cart_list">{!! $publication->content_en !!}</td>
                                <td>
                                    <a href="{{ route('publication.edit', $publication->id) }}" class="btn btn-info btn-icon">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('publication.destroy', $publication->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-warning btn-icon">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
    <style>
        .table_cart_list p {
            max-height: 72px;
            -webkit-line-clamp: 3;
            position: relative;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
            color: #000;
        }

        .table_cart_list img{
           display: none;
        }
    </style>
@endsection
