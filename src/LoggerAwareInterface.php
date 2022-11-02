<?php

namespace BernardinoSlv\Psr3;

interface LoggerAwareInterface
{
    public function setLogger(LoggerInterface $logger);
}