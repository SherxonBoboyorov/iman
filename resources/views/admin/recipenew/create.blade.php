@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Добавить Рецепты Новости</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('recipenew.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label>Выберите рецепты</label>
                            <select name="recipe_id" id="recipe_id" class="form-control">
                                @foreach ($recipes as $recipe)
                                    <option value="{{ $recipe->id }}">{{ $recipe->title_ru }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('recipe_id'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('recipe_id') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="title_uz">Заголовок [Uzbek]</label>
                            <input type="text" id="title_uz" class="form-control" name="title_uz">
                            @if($errors->has('title_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="title_ru">Заголовок [Russian]</label>
                            <input type="text" id="title_ru" class="form-control" name="title_ru">
                            @if($errors->has('title_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="title_en">Заголовок [English]</label>
                            <input type="text" id="title_en" class="form-control" name="title_en">
                            @if($errors->has('title_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_en') }}
                            </div>
                            @endif
                        </div>
                     </div><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="description_uz">Описание [Uzbek]</label>
                            <textarea name="description_uz" class="my-editor" id="description_uz" cols="30" rows="10"></textarea>
                            @if($errors->has('description_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('description_uz') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="description_ru">Описание [Russian]</label>
                            <textarea name="description_ru" class="my-editor" id="description_ru" cols="30" rows="10"></textarea>
                            @if($errors->has('description_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('description_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="description_en">Описание [English]</label>
                            <textarea name="description_en" class="my-editor" id="description_en" cols="30" rows="10"></textarea>
                            @if($errors->has('description_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('description_en') }}
                            </div>
                            @endif
                        </div>
                    </div>

                      <div class="row" style="margin-top: 15px">
                          <div class="col-md-6">
                              <label for="meta_title_ru">Meta Title RU</label>
                              <textarea name="meta_title_ru" class="form-control" id="meta_title_ru" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_title_ru'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_title_ru') }}
                              </div>
                              @endif
                          </div>
                          <div class="col-md-6">
                              <label for="meta_description_ru">Meta Description RU</label>
                              <textarea name="meta_description_ru" class="form-control" id="meta_description_ru" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_description_ru'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_description_ru') }}
                              </div>
                              @endif
                          </div>
                      </div>

                      <div class="row" style="margin-top: 15px">
                          <div class="col-md-6">
                              <label for="meta_title_uz">Meta Title UZ</label>
                              <textarea name="meta_title_uz" class="form-control" id="meta_title_uz" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_title_uz'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_title_uz') }}
                              </div>
                              @endif
                          </div>
                          <div class="col-md-6">
                              <label for="meta_description_uz">Meta Description UZ</label>
                              <textarea name="meta_description_uz" class="form-control" id="meta_description_uz" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_description_uz'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_description_uz') }}
                              </div>
                              @endif
                          </div>
                      </div>

                      <div class="row" style="margin-top: 15px">
                          <div class="col-md-6">
                              <label for="meta_title_en">Meta Title EN</label>
                              <textarea name="meta_title_en" class="form-control" id="meta_title_en" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_title_en'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_title_en') }}
                              </div>
                              @endif
                          </div>
                          <div class="col-md-6">
                              <label for="meta_description_en">Meta Description EN</label>
                              <textarea name="meta_description_en" class="form-control" id="meta_description_en" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_description_en'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_description_en') }}
                              </div>
                              @endif
                          </div>
                      </div><br>

                      <div class="row">
                        <div class="col-md-12">
                            <label for="frame">Ссылка Youtube</label>
                            <input type="text" id="frame" class="form-control" name="frame">
                            @if($errors->has('frame'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('frame') }}
                            </div>
                            @endif
                        </div>
                    </div>


                      <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="image">Изображение</label>
                            <input type="file" name="image" class="form-control-file">
                            @if($errors->has('image'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                    </div><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

