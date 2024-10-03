<?php

namespace App\Providers;

use App\Interfaces\Admin\ApplicationInterface;
use App\Interfaces\Admin\ShopOwnerInterface;
use App\Repositories\Admin\ApplicationRepository;
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
        $this->app->bind(ApplicationInterface::class,ApplicationRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
