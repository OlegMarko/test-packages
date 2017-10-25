<?php

namespace OMarko\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // include aur routes
        include __DIR__ . '/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('OMarko\Calculator\CalculatorController');

        // load our views
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
