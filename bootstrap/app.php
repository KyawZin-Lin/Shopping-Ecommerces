<?php

use App\Http\Middleware\CheckApplicationKey;
use App\Http\Middleware\ShopOwnerAuthenticated;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Middleware\PermissionMiddleware;
use Spatie\Permission\Middleware\RoleMiddleware;
use Spatie\Permission\Middleware\RoleOrPermissionMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function(){
            Route::middleware(['web'])->prefix('shop-owner')
            ->name('shop-owner.')->group(base_path('routes/shop-owner.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
        'role' =>RoleMiddleware::class,
        'permission' => PermissionMiddleware::class,
        'role_or_permission' => RoleOrPermissionMiddleware::class,
        'shop_owner_auth'=>ShopOwnerAuthenticated::class,
        'check_application_key' => CheckApplicationKey::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
