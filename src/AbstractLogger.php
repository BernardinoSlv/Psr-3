<?php

declare(strict_types=1);

namespace BernardinoSlv\Psr3;

use Stringable;

abstract class AbstractLogger extends LogLevel implements LoggerInterface
{
    use LoggerTrait;
    use InterpolationTrait;

    protected string $base_dir;

    public function log(string $level, string|Stringable $message, array $context = []): void
    {
        $path = $this->base_dir . "/logs" . "/" .$level . ".log";

        $message = "[" . strtoupper($level) ."]" . " (" . date("d/m/Y H:i:s") . ") " . $this->interpolation($message, $context);

        if (file_exists($path))
        {
            $container = file_get_contents($path);
            $message .= "\n" . $container;
        }

        file_put_contents(
            $path,
            $message,
        );
    }

}