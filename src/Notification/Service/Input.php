<?php

declare(strict_types=1);

namespace Domain\Notification\Service;

final class Input
{
    public function __construct(
        public readonly string $title,
        public readonly string $description,
    ) {
    }
}
