<?php

namespace Andrelugomes\Configuration;

use Illuminate\Support\ServiceProvider;


class ConfigurationServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     */
    public function register()
    {
        /*$this->mergeConfigFrom(
            __DIR__.'/../config/config-file.php', 'alias'
        );*/

        $this->mergeConfigFrom(
            __DIR__.'/../config/config-file.php', 'config-file' //same name
        );
    }
    /**
     * need to apply vendor:publish to copy config-file
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config-file.php' => config_path('config-file.php'),
        ]);
    }

}