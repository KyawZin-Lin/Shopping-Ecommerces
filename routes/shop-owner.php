<?php

use App\Http\Controllers\ShopOwner\BrandController;
use App\Http\Controllers\ShopOwner\CategoryController;
use App\Http\Controllers\ShopOwner\DashboardController;
use App\Http\Controllers\ShopOwner\ProductController;
use App\Http\Controllers\ShopOwner\SubCategoryController;
use App\Http\Middleware\ShopOwnerAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard/shop',function(){

    // session()->forget('business_type');
    $applications = auth()->user()->applications;
    return view('shop-owner-dashboard.dashboard',compact('applications'));
})->name('dashboard')->middleware(ShopOwnerAuthenticated::class);

Route::get('/login',function(){
    return view('shop-owner-dashboard.auth.login');
})->name('login');

Route::middleware(ShopOwnerAuthenticated::class)->group(function () {
    Route::resources([
        'categories'=>CategoryController::class,
        'sub-categories'=>SubCategoryController::class,
        'brands'=>BrandController::class,
        'products'=>ProductController::class,

    ]);

    Route::get('dashboard/{id}',[DashboardController::class,'chooseDashboard'])->name('dashboard.choose');
});
