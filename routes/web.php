<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\HolidaysetController;
use App\Http\Controllers\Admin\ForcelebrationController;
use App\Http\Controllers\Admin\CorporateclientController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\RecipenewController;
use App\Http\Controllers\Admin\OpinionController;
use App\Http\Controllers\Admin\PublicationController;
use Unisharp\Laravel\LaravelFilemanager\Lfm;


use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\CatalogController;
use App\Http\Controllers\Front\CatalogInsideController;
use App\Http\Controllers\Front\NewController;


Auth::routes();

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resources([
         'slider' => SliderController::class,
         'category' => CategoryController::class,
         'product' => ProductController::class,
         'article' => ArticleController::class,
         'page' =>  PageController::class,
         'holidayset' => HolidaysetController::class,
         'forcelebration' => ForcelebrationController::class,
         'corporateclient' => CorporateclientController::class,
         'recipe' => RecipeController::class,
         'recipenew' => RecipenewController::class,
         'opinion' => OpinionController::class,
         'publication' => PublicationController::class,
    ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', [IndexController::class, 'hompage'])->name('/');
        Route::get('catalog', [CatalogController::class, 'catalog'])->name('catalog');
        Route::get('products', [CatalogInsideController::class, 'list'])->name('products');
        Route::get('products/{slug}', [CatalogInsideController::class, 'show'])->name('product');
        Route::get('articles', [NewController::class, 'list'])->name('articles');
        Route::get('articles/{slug}', [NewController::class, 'show'])->name('article');
    });




Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
