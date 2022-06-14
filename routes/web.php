<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/login', [\App\Http\Controllers\AdminController::class,'login'])->name('login');
Route::post('/admin/login', [\App\Http\Controllers\AdminController::class,'loginPost'])->name('loginPost');
Route::post('/admin/register', [\App\Http\Controllers\AdminController::class,'registerPost'])->name('registerPost');
Route::get('/admin/register', [\App\Http\Controllers\AdminController::class,'register'])->name('register');

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('logout');
    Route::prefix('/languages')->group(function () {
        Route::get('/', [\App\Http\Controllers\LanguageController::class, 'index'])->name('languages.index');
        Route::post('/create', [\App\Http\Controllers\LanguageController::class, 'store'])->name('languages.store');
        Route::post('/edit', [\App\Http\Controllers\LanguageController::class, 'update'])->name('languages.update');
        Route::post('/delete', [\App\Http\Controllers\LanguageController::class, 'destroy'])->name('languages.destroy');
        Route::post('/deleteMany', [\App\Http\Controllers\LanguageController::class, 'destroyMany'])->name('languages.destroyMany');
    });
    Route::prefix('/urls')->group(function () {
        Route::get('/', [\App\Http\Controllers\UrlController::class, 'index'])->name('urls.index');
        Route::post('/create', [\App\Http\Controllers\UrlController::class, 'store'])->name('urls.store');
        Route::post('/edit', [\App\Http\Controllers\UrlController::class, 'update'])->name('urls.update');
        Route::post('/delete', [\App\Http\Controllers\UrlController::class, 'destroy'])->name('urls.destroy');
        Route::post('/deleteMany', [\App\Http\Controllers\UrlController::class, 'destroyMany'])->name('urls.destroyMany');
    });
    Route::prefix('/menus')->group(function () {
        Route::get('/', [\App\Http\Controllers\MenuController::class, 'index'])->name('menus.index');
        Route::post('/create', [\App\Http\Controllers\MenuController::class, 'store'])->name('menus.store');
        Route::post('/edit', [\App\Http\Controllers\MenuController::class, 'update'])->name('menus.update');
        Route::post('/delete', [\App\Http\Controllers\MenuController::class, 'destroy'])->name('menus.destroy');
        Route::post('/deleteMany', [\App\Http\Controllers\MenuController::class, 'destroyMany'])->name('menus.destroyMany');
        Route::post('/orderEdit', [\App\Http\Controllers\MenuController::class, 'orderUpdate'])->name('menus.orderUpdate');
    });
    Route::prefix('/contents')->group(function () {
        Route::get('/', [\App\Http\Controllers\ContentController::class, 'index'])->name('contents.index');
        Route::post('/create', [\App\Http\Controllers\ContentController::class, 'store'])->name('contents.store');
        Route::post('/edit', [\App\Http\Controllers\ContentController::class, 'update'])->name('contents.update');
        Route::post('/delete', [\App\Http\Controllers\ContentController::class, 'destroy'])->name('contents.destroy');
        Route::post('/deleteMany', [\App\Http\Controllers\ContentController::class, 'destroyMany'])->name('contents.destroyMany');
        Route::post('/orderEdit', [\App\Http\Controllers\ContentController::class, 'orderUpdate'])->name('contents.orderUpdate');


    });

    Route::prefix('/teams')->group(function (){
        Route::get('/',[\App\Http\Controllers\TeamController::class,'index'])->name('teams.index');
        Route::post('/create',[\App\Http\Controllers\TeamController::class,'store'])->name('teams.store');
        Route::post('/edit',[\App\Http\Controllers\TeamController::class,'update'])->name('teams.update');
        Route::post('/delete',[\App\Http\Controllers\TeamController::class,'destroy'])->name('teams.destroy');
        Route::post('/deleteMany',[\App\Http\Controllers\TeamController::class,'destroyMany'])->name('teams.destroyMany');
        Route::post('/orderEdit',[\App\Http\Controllers\TeamController::class,'orderUpdate'])->name('teams.orderUpdate');

    });

    Route::prefix('/services')->group(function (){
        Route::get('/',[\App\Http\Controllers\ServiceController::class,'index'])->name('services.index');
        Route::post('/create',[\App\Http\Controllers\ServiceController::class,'store'])->name('services.store');
        Route::post('/edit',[\App\Http\Controllers\ServiceController::class,'update'])->name('services.update');
        Route::post('/delete',[\App\Http\Controllers\ServiceController::class,'destroy'])->name('services.destroy');
        Route::post('/deleteMany',[\App\Http\Controllers\ServiceController::class,'destroyMany'])->name('services.destroyMany');
        Route::post('/orderEdit',[\App\Http\Controllers\ServiceController::class,'orderUpdate'])->name('services.orderUpdate');
    });
    Route::prefix('/sliders')->group(function (){
        Route::get('/',[\App\Http\Controllers\SliderController::class,'index'])->name('sliders.index');
        Route::post('/create',[\App\Http\Controllers\SliderController::class,'store'])->name('sliders.store');
        Route::post('/edit',[\App\Http\Controllers\SliderController::class,'update'])->name('sliders.update');
        Route::post('/delete',[\App\Http\Controllers\SliderController::class,'destroy'])->name('sliders.destroy');
        Route::post('/deleteMany',[\App\Http\Controllers\SliderController::class,'destroyMany'])->name('sliders.destroyMany');
        Route::post('/orderEdit',[\App\Http\Controllers\SliderController::class,'orderUpdate'])->name('sliders.orderUpdate');
    });
    Route::prefix('/homepageimages')->group(function (){
        Route::get('/',[\App\Http\Controllers\HomepageImageController::class,'index'])->name('homepageimages.index');
        Route::post('/create',[\App\Http\Controllers\HomepageImageController::class,'store'])->name('homepageimages.store');
        Route::post('/edit',[\App\Http\Controllers\HomepageImageController::class,'update'])->name('homepageimages.update');
        Route::post('/delete',[\App\Http\Controllers\HomepageImageController::class,'destroy'])->name('homepageimages.destroy');
        Route::post('/deleteMany',[\App\Http\Controllers\HomepageImageController::class,'destroyMany'])->name('homepageimages.destroyMany');
        Route::post('/orderEdit',[\App\Http\Controllers\HomepageImageController::class,'orderUpdate'])->name('homepageimages.orderUpdate');
    });

});
Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect'])->group(function () {
    Route::get('/{url}', [\App\Http\Controllers\HomeController::class, 'test'])->name('page');

});
    Route::get('/setLocale/{language}',[\App\Http\Controllers\HomeController::class,'setLocale'])->name('setLocale');




