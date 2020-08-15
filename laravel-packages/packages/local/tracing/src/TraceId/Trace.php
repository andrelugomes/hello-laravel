<?php

namespace Local\Tracing\TraceId;

interface Trace
{
    public function generate(): string;
}
