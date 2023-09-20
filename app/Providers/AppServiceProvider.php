<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Calculator;
use App\Services\Currency;
use Illuminate\Contracts\Foundation\Application;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(Calculator::class, function (Application $app) {
            return new Calculator($app->make(Currency::class));
        });
    }
}
