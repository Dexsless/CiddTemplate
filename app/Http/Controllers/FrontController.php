<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function shop()
    {
        return view('user.shop');
    }
    public function cart()
    {
        return view('user.cart');
    }
    public function checkout()
    {
        return view('user.checkout');
    }
    public function track()
    {
        return view('user.track');
    }
}
