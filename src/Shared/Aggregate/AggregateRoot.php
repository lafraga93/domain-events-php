<?php

declare(strict_types=1);

namespace Domain\Shared\Aggregate;

use Domain\Shared\Event\EventInterface;

abstract class AggregateRoot
{
    /**
     * @var $events array<EventInterface>
     */
    private array $events = [];

    final protected function record(EventInterface $event): void
    {
        $this->events[] = $event;
    }

    final public function flush(): array
    {
        $domainEvents = $this->events;
        $this->events = [];

        return $domainEvents;
    }

    final public function hasEvents(): bool
    {
        return count($this->events) > 0;
    }
}
