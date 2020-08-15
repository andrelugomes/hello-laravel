<?php

namespace Local\Tracing\TraceId;

use Illuminate\Support\ServiceProvider;

class TraceIdProvider extends ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind(Trace::class, TraceIdGenerator::class);
    }
}
