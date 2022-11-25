<?php

declare(strict_types=1);

namespace Domain\Ticket\Service\Create;

final class Input
{
    public function __construct(
        public readonly string $uuid,
        public readonly string $title,
        public readonly string $description,
    ) {
    }
}
