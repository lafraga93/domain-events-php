<?php

declare(strict_types=1);

namespace Domain\Ticket\Service\Create;

use Domain\Ticket\Entity\Ticket;
use Domain\Ticket\Repository\TicketRepositoryInterface;
use Infrastructure\Event\InMemoryEventBus;

final class Create
{
    public function __construct(
        private readonly TicketRepositoryInterface $repository,
        private readonly InMemoryEventBus $eventBus,
    ) {
    }

    public function handle(Input $input): void
    {
        $ticket = new Ticket(
            $input->uuid,
            $input->title,
            $input->description,
        );

        $this->repository->create($ticket);

        if ($ticket->hasEvents()) {
            $this->eventBus->publish($ticket->flush());
        }
    }
}
