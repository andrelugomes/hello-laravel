<?php

namespace Auto\Tracing\TraceId;

use Ramsey\Uuid\Uuid;

class AutoTracingIdGenerator implements AutoTracing
{
    public function generate(): string
    {
        return str_replace('-', '', Uuid::uuid4());
    }
}
