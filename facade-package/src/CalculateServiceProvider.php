<?php

namespace Andrelugomes\Calculate;

use Illuminate\Support\ServiceProvider;

class CalculateServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('calculate', function () {
            return new Calculate;
        });
    }
}
