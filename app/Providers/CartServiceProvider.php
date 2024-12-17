<?php

namespace App\Providers;

use App\Helpers\Cart\CartService;
use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('cart', function($app){
            return new CartService();
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
