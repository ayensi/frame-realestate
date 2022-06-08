<?php

use Illuminate\Support\Facades\Route;

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



Route::group(['prefix' => '{locale?}', 'middleware' => 'localize'], function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
    Route::get('/about-us', [\App\Http\Controllers\AboutController::class,'index'])->name('about');
    Route::get('/team', [\App\Http\Controllers\TeamController::class,'index'])->name('team');
    Route::get('/service', [\App\Http\Controllers\ServicesController::class,'index'])->name('service');
    Route::get('/news', [\App\Http\Controllers\NewsController::class,'index'])->name('news');
    Route::get('/contact', [\App\Http\Controllers\ContactController::class,'index'])->name('contact');
    Route::get('/property-rent', [\App\Http\Controllers\PropertyRentController::class,'index'])->name('rent');
    Route::get('/property-rent-bodrum', [\App\Http\Controllers\PropertyRentBodrumController::class,'index'])->name('rentBodrum');
    Route::get('/rent/{slug}', [\App\Http\Controllers\PropertyRentController::class,'show'])->name('rentSlug');
    Route::get('/rent/{slug}', [\App\Http\Controllers\PropertyRentBodrumController::class,'show'])->name('rentSlug');
    Route::get('/property-sale', [\App\Http\Controllers\PropertySaleController::class,'index'])->name('sale');
    Route::get('/property-sale-bodrum', [\App\Http\Controllers\PropertySaleBodrumController::class,'index'])->name('saleBodrum');
    Route::get('/sale/{slug}', [\App\Http\Controllers\PropertySaleBodrumController::class,'show'])->name('saleSlug');
    Route::get('/sale/{slug}', [\App\Http\Controllers\PropertySaleController::class,'show'])->name('saleSlug');
    Route::post('/rent/{slug}', [\App\Http\Controllers\PropertyRentController::class,'addBook'])->name('rentSlug');
    Route::post('contact',function (Request $request){

        $add_message = Message::insert([
            'name_surname'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);

        if ($add_message){
            return redirect(route('contact'))->with('message','Mesajınız bize ulaşmıştır. En kısa sürede sizinle iletişime geçeceğiz');
        }

    })->name('contact');





});
