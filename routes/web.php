<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;


//Front Routes
Route::as('front.')->group(function (){
    Route::get('/',[FrontController::class,'home'])->name('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    //Dashboard Routes
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    //Category Routes
    Route::resource('/categories',CategoryController::class);

    //Brand Routes
    Route::resource('/brands',BrandController::class);

    //Product Routes
    Route::resource('/products',ProductController::class);

});
