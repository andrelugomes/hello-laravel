<?php

namespace App\Providers;

use App\Twitter;
use Illuminate\Support\ServiceProvider;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * BEFORE loading
     *
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Twitter::class, function () {
            return new Twitter(config('twitter.api.key'), config('twitter.api.secret'));
        });
    }

    /**
     * AFTER loading
     *
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
