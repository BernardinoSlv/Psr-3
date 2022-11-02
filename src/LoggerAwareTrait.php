<?php

declare(strict_types=1);

use BernardinoSlv\Psr3\LoggerInterface;

trait LoggerAwareTrait
{
    protected ?LoggerInterface $logger = null;

    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }
}