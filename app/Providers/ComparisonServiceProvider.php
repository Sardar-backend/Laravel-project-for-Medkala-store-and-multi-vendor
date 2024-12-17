<?php

namespace App\Providers;

use App\Helpers\Comparison\ComparisonService;
use Illuminate\Support\ServiceProvider;

class ComparisonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('comparison', function($app){
            return new ComparisonService();
        });
    }

    /**
     * Bootstrap services.
     */
    // public function boot(): void
    // {
    //     //
    // }
}
