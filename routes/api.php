<?php

use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\Customer\AuthController;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\SubCategoryApiController;
use App\Models\Admin\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('customer/register', [AuthController::class, 'register']);
Route::post('customer/login', [AuthController::class, 'login']);
Route::post('customer/logout', [AuthController::class, 'logout'])->middleware('auth:api');



Route::middleware('check_application_key')->group(function(){
    Route::get('/get/categories',[CategoryApiController::class,'getAllCategories']);
    Route::get('/get/sub-categories',[SubCategoryApiController::class,'getAllSubCategories']);
    Route::get('/get/products',[ProductApiController::class,'getAllProducts']);


});

Route::get('/get/app/permissions',function(){
    // dd(request()->header('app_key'));
    $appKey=request()->header('app_key');
    $application = Application::where('application_key',$appKey)->first();
    $permissions = $application->getAllPermissions()->pluck('name');
    return response()->json(['data'=>$permissions]);
});
