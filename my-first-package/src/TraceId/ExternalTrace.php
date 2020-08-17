<?php

namespace External\TraceId;

interface ExternalTrace
{
    public function generate(): string;
}
