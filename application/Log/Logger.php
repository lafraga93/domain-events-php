<?php

declare(strict_types=1);

namespace Infrastructure\Log;

final class Logger
{
    public static function log(string $message, ?bool $continue = false): void
    {
        echo sprintf('Log: %s', $message . PHP_EOL);

        if (! $continue) {
            exit();
        }
    }
}
