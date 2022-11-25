<?php

declare(strict_types=1);

namespace Domain\Ticket\Entity;

use Domain\Shared\Aggregate\AggregateRoot;
use Domain\Ticket\Event\TicketCreated;

final class Ticket extends AggregateRoot
{
    public function __construct(
        public readonly string $uuid,
        public readonly string $title,
        public readonly string $description,
    ) {
        $this->record(
            new TicketCreated(
                $this->title,
                $this->description,
            ),
        );
    }
}
