<?php

namespace Auto\Tracing;

use Auto\Tracing\TraceId\AutoTracing;
use Auto\Tracing\TraceId\AutoTracingIdGenerator;
use Illuminate\Support\ServiceProvider;

class TraceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(AutoTracing::class, AutoTracingIdGenerator::class);
    }
}
