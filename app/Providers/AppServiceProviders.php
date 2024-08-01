<?php

namespace App\Providers;

use illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        //
    }
}
