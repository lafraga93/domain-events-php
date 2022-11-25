<?php

declare(strict_types=1);

namespace Infrastructure\Repository;

use Domain\Ticket\Entity\Ticket;
use Domain\Ticket\Repository\TicketRepositoryInterface;

final class TicketRepository implements TicketRepositoryInterface
{
    public function create(Ticket $ticket): void
    {
    }
}
