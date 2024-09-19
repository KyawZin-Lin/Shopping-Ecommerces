<?php

use App\Http\Middleware\ShopOwnerAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard/shop',function(){
    return view('shop-owner-dashboard.dashboard');
})->name('dashboard')->middleware(ShopOwnerAuthenticated::class);

Route::get('/login',function(){
    return view('shop-owner-dashboard.auth.login');
})->name('login');
