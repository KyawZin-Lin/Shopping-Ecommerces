<?php

namespace App\Providers;

use App\Interfaces\Admin\ShopOwnerInterface;
use App\Repositories\Admin\ShopOwnerRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ShopOwnerInterface::class,ShopOwnerRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
