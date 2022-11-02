<?php

declare(strict_types=1);

namespace BernardinoSlv\Psr3;

use Stringable;

trait InterpolationTrait
{
    public function interpolation(string|Stringable $message, array $context): string
    {
        $replace = [];

        foreach ($context as $key => $val) {
            if (!is_array($val) && (!is_object($val) || method_exists($val, "__toString")))
            {
                $replace["{" . $key . "}"] = $val;
            }
        }

        return strtr($message, $replace);
    }
}