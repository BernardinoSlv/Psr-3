<?php

namespace BernardinoSlv\Psr3;

use Stringable;

class Logger extends AbstractLogger
{
    protected string $base_dir;

    public function __construct(string $base_dir)
    {
        $this->base_dir = $base_dir;
    }
}