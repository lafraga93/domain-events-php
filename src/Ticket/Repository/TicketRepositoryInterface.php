<?php

declare(strict_types=1);

namespace Domain\Ticket\Repository;

use Domain\Ticket\Entity\Ticket;

interface TicketRepositoryInterface
{
    public function create(Ticket $ticket): void;
}
