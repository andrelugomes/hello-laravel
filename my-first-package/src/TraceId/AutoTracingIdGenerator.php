<?php

namespace External\TraceId;

use Ramsey\Uuid\Uuid;

class AutoTracingIdGenerator implements ExternalTrace
{
    public function generate(): string
    {
        return 'I\'m from outside...' . str_replace('-', '', Uuid::uuid4());
    }
}
