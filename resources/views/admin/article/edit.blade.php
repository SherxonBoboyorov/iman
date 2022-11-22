@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Редактировать Новинки</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('article.update', $article->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            <label for="title_uz">Заголовок [Uzbek]</label>
                            <input type="text" id="title_uz" value="{{ $article->title_uz }}" class="form-control" name="title_uz">
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
                            <input type="text" id="title_ru" value="{{ $article->title_ru }}" class="form-control" name="title_ru">
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

                     <hr><h3>Усовершенствованные процедуры мониторинга</h3><hr>

                    <div class="row" style="margin-top: 15px">
                     <div class="col-md-6">
                        <label for="package_uz">Упаковка: [Uzbek]</label>
                        <input type="text" id="package_uz" class="form-control" name="package_uz">
                        @if($errors->has('package_uz'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                              {{ $errors->first('package_uz') }}
                           </div>
                          @endif
                       </div>
                    </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="package_ru">Упаковка: [Russian]</label>
                                <input type="text" id="package_ru" class="form-control" name="package_ru">
                                @if($errors->has('package_ru'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('package_ru') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="package_en">Упаковка: [English]</label>
                                <input type="text" id="package_en" class="form-control" name="package_en">
                                @if($errors->has('package_en'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('package_en') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <br>

                          <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <label for="weight"> Вес:</label>
                                <input type="number" id="weight" class="form-control" name="weight">
                                @if($errors->has('weight'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('weight') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <br>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                            <label for="compound_uz">Состав: [Uzbek]</label>
                            <input type="text" id="compound_uz" class="form-control" name="compound_uz">
                            @if($errors->has('compound_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('compound_uz') }}
                            </div>
                            @endif
                        </div>
                      </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="compound_ru">Состав: [Russian]</label>
                                <input type="text" id="compound_ru" class="form-control" name="compound_ru">
                                @if($errors->has('compound_ru'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('compound_ru') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="compound_en">Состав: [English]</label>
                                <input type="text" id="compound_en" class="form-control" name="compound_en">
                                @if($errors->has('compound_en'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('compound_en') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <br>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-2">
                            <label for="best_before_date_uz">Срок годности: [Uzbek]</label>
                            <input type="text" id="best_before_date_uz" class="form-control" name="best_before_date_uz">
                            @if($errors->has('best_before_date_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('best_before_date_uz') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-2">
                            <label for="best_before_date_ru">Срок годности: [Russian]</label>
                            <input type="text" id="best_before_date_ru" class="form-control" name="best_before_date_ru">
                            @if($errors->has('best_before_date_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('best_before_date_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-2">
                            <label for="best_before_date_en">Срок годности: [English]</label>
                            <input type="text" id="best_before_date_en" class="form-control" name="best_before_date_en">
                            @if($errors->has('best_before_date_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('best_before_date_en') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="price">Цена</label>
                            <input type="number" id="price" class="form-control" name="price">
                            @if($errors->has('price'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('price') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <br><hr><br>

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

