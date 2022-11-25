<?php

declare(strict_types=1);

namespace Domain\Notification\Entity;

final class Notification
{
    public function __construct(
        public readonly string $title,
        public readonly string $description,
    ) {
    }
}
