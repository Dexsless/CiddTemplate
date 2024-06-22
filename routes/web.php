<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('layouts.index');
});
Route::get('/index', function () {
    return view('layouts.index2');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    route::get('/', function() {
        return view('admin.index');
    });
});

route::get('/home', [FrontController::class, 'index']);
route::get('/contact', [FrontController::class, 'contact']);
route::get('/shop', [FrontController::class, 'shop']);
route::get('/cart', [FrontController::class, 'cart']);
route::get('/checkout', [FrontController::class, 'checkout']);
route::get('/track', [FrontController::class, 'track']);

