@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Редактировать Мнение наших гурманов</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('opinion.update', $opinion->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name_uz">Имя [Uzbek]</label>
                                <input type="text" id="name_uz" value="{{ $opinion->name_uz }}" class="form-control" name="name_uz">
                                @if($errors->has('name_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_uz') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="name_ru">Имя [Russian]</label>
                                <input type="text" id="name_ru" value="{{ $opinion->name_ru }}" class="form-control" name="name_ru">
                                @if($errors->has('name_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_ru') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="name_en">Имя [English]</label>
                                <input type="text" id="name_en" value="{{ $opinion->name_en }}" class="form-control" name="name_en">
                                @if($errors->has('name_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_en') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-4">
                                <label for="company_name_uz">Название компании [Uzbek]</label>
                                <input type="text" id="company_name_uz" value="{{ $opinion->company_name_uz }}" class="form-control" name="company_name_uz">
                                @if($errors->has('company_name_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('company_name_uz') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-4">
                                <label for="company_name_ru">Название компании [Russian]</label>
                                <input type="text" id="company_name_ru" value="{{ $opinion->company_name_ru }}" class="form-control" name="company_name_ru">
                                @if($errors->has('company_name_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('company_name_ru') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-4">
                                <label for="company_name_en">Название компании [English]</label>
                                <input type="text" id="company_name_en" value="{{ $opinion->company_name_en }}" class="form-control" name="company_name_en">
                                @if($errors->has('company_name_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('company_name_en') }}
                                    </div>
                                @endif
                            </div>
                        </div><br>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="content_uz">Контент [uzbek]</label>
                                <textarea name="content_uz" class="my-editor" id="content_uz" cols="30" rows="10">{{ $opinion->content_uz }}</textarea>
                                @if($errors->has('content_uz'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('content_uz') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="content_ru">Контент [Russian]</label>
                                <textarea name="content_ru" class="my-editor" id="content_ru" cols="30" rows="10">{{ $opinion->content_ru }}</textarea>
                                @if($errors->has('content_ru'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('content_ru') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="content_en">Контент [English]</label>
                                <textarea name="content_en" class="my-editor" id="content_en" cols="30" rows="10">{{ $opinion->content_en }}</textarea>
                                @if($errors->has('content_en'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('content_en') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Обновить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection
