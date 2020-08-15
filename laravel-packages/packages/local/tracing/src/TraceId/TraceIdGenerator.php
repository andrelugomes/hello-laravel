<?php

namespace Local\Tracing\TraceId;

use Ramsey\Uuid\Uuid;

class TraceIdGenerator implements Trace
{
    public function generate(): string
    {
        return str_replace('-', '', Uuid::uuid4());
    }
}
