<?php

use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DurationController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ShopOwnerController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BusinessTypeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('admin-dashboard.dashboard');
})->middleware(['auth','role:SuperAdmin', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth', 'role:SuperAdmin')->prefix('admin')->group(function () {
    Route::resources([
        'shop-owners'=>ShopOwnerController::class,
        'packages'=>PackageController::class,
        'durations'=>DurationController::class,
        'applications'=>ApplicationController::class,
        'categories'=>CategoryController::class,
        'sub-categories'=>SubCategoryController::class,
        'brands'=>BrandController::class,
        'business-types'=>BusinessTypeController::class,

    ]);

    Route::get('shop-owners/{id}/assign/package',[ShopOwnerController::class,'assignPackagePage'])->name('shop-owners.assignPage');
    Route::post('shop-owners/{id}/assign/package',[ShopOwnerController::class,'assignPackage'])->name('shop-owners.assign');
    Route::get('shop-owners/{id}/start/confirm',[ShopOwnerController::class,'confirm'])->name('shop-owners.confirm');


});

require __DIR__.'/auth.php';
