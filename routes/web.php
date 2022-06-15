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

    Route::get('/turkce',[\App\Http\Controllers\AdminController::class, 'turkceget'])->name('turkceget');
    Route::post('/turkcecreate',[\App\Http\Controllers\AdminController::class, 'turkcestore'])->name('turkce.store');
    Route::post('/turkceupdate',[\App\Http\Controllers\AdminController::class, 'turkceupdate'])->name('turkce.update');
    Route::post('/turkcedestroy',[\App\Http\Controllers\AdminController::class, 'turkcestroy'])->name('turkce.destroy');
    Route::get('/english',[\App\Http\Controllers\AdminController::class, 'englishget'])->name('englishget');
    Route::post('/englishcreate',[\App\Http\Controllers\AdminController::class, 'englishstore'])->name('english.store');
    Route::post('/englishupdate',[\App\Http\Controllers\AdminController::class, 'englishupdate'])->name('english.update');
    Route::post('/englishdestroy',[\App\Http\Controllers\AdminController::class, 'englishdestroy'])->name('english.destroy');


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

    Route::prefix('/properties')->group(function (){
        Route::get('/',[\App\Http\Controllers\PropertyController::class,'index'])->name('properties.index');
        Route::post('/create',[\App\Http\Controllers\PropertyController::class,'store'])->name('properties.store');
        Route::post('/edit',[\App\Http\Controllers\PropertyController::class,'update'])->name('properties.update');
        Route::post('/delete',[\App\Http\Controllers\PropertyController::class,'destroy'])->name('properties.destroy');
        Route::post('/deleteMany',[\App\Http\Controllers\PropertyController::class,'destroyMany'])->name('properties.destroyMany');
        Route::post('/orderEdit',[\App\Http\Controllers\PropertyController::class,'orderUpdate'])->name('properties.orderUpdate');
    });

    Route::prefix('/categories')->group(function (){
        Route::get('/',[\App\Http\Controllers\CategoryController::class,'index'])->name('categories.index');
        Route::post('/create',[\App\Http\Controllers\CategoryController::class,'store'])->name('categories.store');
        Route::post('/edit',[\App\Http\Controllers\CategoryController::class,'update'])->name('categories.update');
        Route::post('/delete',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('categories.destroy');
        Route::post('/deleteMany',[\App\Http\Controllers\CategoryController::class,'destroyMany'])->name('categories.destroyMany');
        Route::post('/orderEdit',[\App\Http\Controllers\CategoryController::class,'orderUpdate'])->name('categories.orderUpdate');
    });

    Route::prefix('/cities')->group(function (){
        Route::get('/',[\App\Http\Controllers\CityController::class,'index'])->name('cities.index');
        Route::post('/create',[\App\Http\Controllers\CityController::class,'store'])->name('cities.store');
        Route::post('/edit',[\App\Http\Controllers\CityController::class,'update'])->name('cities.update');
        Route::post('/delete',[\App\Http\Controllers\CityController::class,'destroy'])->name('cities.destroy');
        Route::post('/deleteMany',[\App\Http\Controllers\CityController::class,'destroyMany'])->name('cities.destroyMany');
        Route::post('/orderEdit',[\App\Http\Controllers\CityController::class,'orderUpdate'])->name('cities.orderUpdate');
    });

    Route::prefix('/districts')->group(function (){
        Route::get('/',[\App\Http\Controllers\DistrictController::class,'index'])->name('districts.index');
        Route::post('/create',[\App\Http\Controllers\DistrictController::class,'store'])->name('districts.store');
        Route::post('/edit',[\App\Http\Controllers\DistrictController::class,'update'])->name('districts.update');
        Route::post('/delete',[\App\Http\Controllers\DistrictController::class,'destroy'])->name('districts.destroy');
        Route::post('/deleteMany',[\App\Http\Controllers\DistrictController::class,'destroyMany'])->name('districts.destroyMany');
        Route::post('/orderEdit',[\App\Http\Controllers\DistrictController::class,'orderUpdate'])->name('districts.orderUpdate');
    });

    Route::prefix('/property_status')->group(function (){
        Route::get('/',[\App\Http\Controllers\PropertyStatusController::class,'index'])->name('property_statuses.index');
        Route::post('/create',[\App\Http\Controllers\PropertyStatusController::class,'store'])->name('property_statuses.store');
        Route::post('/edit',[\App\Http\Controllers\PropertyStatusController::class,'update'])->name('property_statuses.update');
        Route::post('/delete',[\App\Http\Controllers\PropertyStatusController::class,'destroy'])->name('property_statuses.destroy');
        Route::post('/deleteMany',[\App\Http\Controllers\PropertyStatusController::class,'destroyMany'])->name('property_statuses.destroyMany');
        Route::post('/orderEdit',[\App\Http\Controllers\PropertyStatusController::class,'orderUpdate'])->name('property_statuses.orderUpdate');
    });

    Route::prefix('/estate_types')->group(function (){
        Route::get('/',[\App\Http\Controllers\EstateTypeController::class,'index'])->name('estate_types.index');
        Route::post('/create',[\App\Http\Controllers\EstateTypeController::class,'store'])->name('estate_types.store');
        Route::post('/edit',[\App\Http\Controllers\EstateTypeController::class,'update'])->name('estate_types.update');
        Route::post('/delete',[\App\Http\Controllers\EstateTypeController::class,'destroy'])->name('estate_types.destroy');
        Route::post('/deleteMany',[\App\Http\Controllers\EstateTypeController::class,'destroyMany'])->name('estate_types.destroyMany');
        Route::post('/orderEdit',[\App\Http\Controllers\EstateTypeController::class,'orderUpdate'])->name('estate_types.orderUpdate');
    });

    Route::prefix('/property_images')->group(function (){
        Route::get('/',[\App\Http\Controllers\PropertyImageController::class,'index'])->name('property_images.index');
        Route::post('/create',[\App\Http\Controllers\PropertyImageController::class,'store'])->name('property_images.store');
        Route::post('/edit',[\App\Http\Controllers\PropertyImageController::class,'update'])->name('property_images.update');
        Route::post('/delete',[\App\Http\Controllers\PropertyImageController::class,'destroy'])->name('property_images.destroy');
        Route::post('/deleteMany',[\App\Http\Controllers\PropertyImageController::class,'destroyMany'])->name('property_images.destroyMany');
        Route::post('/orderEdit',[\App\Http\Controllers\PropertyImageController::class,'orderUpdate'])->name('property_images.orderUpdate');
    });

});
Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect'])->group(function () {
    Route::get('/{url}', [\App\Http\Controllers\HomeController::class, 'test'])->name('page');

});
    Route::get('/setLocale/{language}',[\App\Http\Controllers\HomeController::class,'setLocale'])->name('setLocale');




