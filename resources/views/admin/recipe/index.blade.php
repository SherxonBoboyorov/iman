@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Список Рецепты</h4>
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
                            <th>Заголовок [Uzbek]</th>
                            <th>Заголовок [Russian]</th>
                            <th>Заголовок [English]</th>
                            <th colspan="2" style="width: 2%;">Действий</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($recipes as $recipe)
                            <tr>
                                <td>{{ $recipe->id }}</td>
                                <td>{{ $recipe->title_uz }}</td>
                                <td>{{ $recipe->title_ru }}</td>
                                <td>{{ $recipe->title_en }}</td>
                                <td>
                                    <a href="{{ route('recipe.edit', $recipe->id) }}" class="btn btn-info btn-icon">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('recipe.destroy', $recipe->id) }}" method="POST">
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
@endsection
