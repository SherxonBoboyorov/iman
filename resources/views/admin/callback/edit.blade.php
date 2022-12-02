@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Редактировать Контакты</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('callback.update', $callback->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="title_uz">Заголовок [Uzbek]</label>
                                <input type="text" id="title_uz" value="{{ $callback->title_uz }}" class="form-control" name="title_uz">
                                @if($errors->has('title_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_uz') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="title_ru">Заголовок [Russian]</label>
                                <input type="text" id="title_ru" value="{{ $callback->title_ru }}" class="form-control" name="title_ru">
                                @if($errors->has('title_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_ru') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="title_en">Заголовок [English]</label>
                                <input type="text" id="title_en" value="{{ $callback->title_en }}" class="form-control" name="title_en">
                                @if($errors->has('title_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_en') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <label for="phone_number">Телефон:</label>
                                <input type="text" id="phone_number" value="{{ $callback->phone_number }}" class="form-control" name="phone_number">
                                @if($errors->has('phone_number'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('phone_number') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <br><hr><br>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="address_uz">Адрес: [Uzbek]</label>
                                <input type="text" id="address_uz" value="{{ $callback->address_uz }}" class="form-control" name="address_uz">
                                @if($errors->has('address_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('address_uz') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="address_ru">Адрес: [Russian]</label>
                                <input type="text" id="address_ru" value="{{ $callback->address_ru }}" class="form-control" name="address_ru">
                                @if($errors->has('address_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('address_ru') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="address_en">Адрес: [English]</label>
                                <input type="text" id="address_en" value="{{ $callback->address_en }}" class="form-control" name="address_en">
                                @if($errors->has('address_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('address_en') }}
                                    </div>
                                @endif
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="map">карты</label>
                                <input type="text" id="map" value="{{ $callback->map }}" class="form-control" name="map">
                                @if($errors->has('map'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('map') }}
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
