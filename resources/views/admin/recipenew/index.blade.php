@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Список Рецепты Новости</h4>
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
                            <th>Рецепты</th>
                            <th>Заголовок [Uzbek]</th>
                            <th>Заголовок [Russian]</th>
                            <th>Заголовок [English]</th>
                            <th colspan="2" style="width: 2%;">Действий</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recipenews as $recipenew)
                        <tr>
                            <td>{{ $recipenew->id }}</td>
                            <td>
                                <img src="{{ asset($recipenew->image) }}" alt="" width="35" height="35">
                            </td>
                            <td>{{ $recipenew->recipe->title_en ?? "" }}</td>
                            <td>{{ $recipenew->title_uz }}</td>
                            <td>{{ $recipenew->title_ru }}</td>
                            <td>{{ $recipenew->title_en }}</td>
                            <td>
                                <a href="{{ route('recipenew.edit', $recipenew->id) }}" class="btn btn-info btn-icon">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('recipenew.destroy', $recipenew->id) }}" method="POST">
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
                {!! $recipenews->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
