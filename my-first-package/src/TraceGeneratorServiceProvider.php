<?php

namespace External;

use External\TraceId\AutoTracingIdGenerator;
use External\TraceId\ExternalTrace;
use Illuminate\Support\ServiceProvider;

class TraceGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ExternalTrace::class, AutoTracingIdGenerator::class);
    }
}
