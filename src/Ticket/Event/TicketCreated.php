<?php

declare(strict_types=1);

namespace Domain\Ticket\Event;

use Domain\Shared\Event\EventInterface;

final class TicketCreated implements EventInterface
{
    public function __construct(
        public readonly string $title,
        public readonly string $description,
    ) {
    }
}
