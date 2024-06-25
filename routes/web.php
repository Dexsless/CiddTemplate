<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\IsAdmin;

// Route::get('/', function () {
//     return view('layouts.index');
// });
Route::get('/index', function () {
    return view('layouts.index2');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

});
route::resource('users', UsersController::class);

route::get('/', [FrontController::class, 'index']);
route::get('/contact', [FrontController::class, 'contact']);
route::get('/shop', [FrontController::class, 'shop']);
route::get('/shop-detail', [FrontController::class, 'shopdetail']);
route::get('/cart', [FrontController::class, 'cart']);
route::get('/checkout', [FrontController::class, 'checkout']);
route::get('/track', [FrontController::class, 'track']);
route::get('/about', [FrontController::class, 'about']);
