<?php

namespace Auto\Tracing\TraceId;

interface AutoTracing
{
    public function generate(): string;
}
