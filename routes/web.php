<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('layouts.index');
});
Route::get('/index', function () {
    return view('layouts.index2');
});
// route::get('login' , function () {
//     return view('auth.login');
// });
// route::get('register' , function () {
//     return view('auth.register');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
