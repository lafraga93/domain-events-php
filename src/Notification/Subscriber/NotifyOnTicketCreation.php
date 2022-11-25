<?php

declare(strict_types=1);

namespace Domain\Notification\Subscriber;

use Domain\Notification\Service\Create;
use Domain\Notification\Service\Input;
use Domain\Shared\Event\EventInterface;
use Domain\Shared\Subscriber\SubscriberInterface;
use Domain\Ticket\Event\TicketCreated;

final class NotifyOnTicketCreation implements SubscriberInterface
{
    public function __construct(
        private readonly Create $service,
    ) {
    }

    public function __invoke(EventInterface $data): void
    {
        $this->service->handle(
            new Input(
              $data->title,
              $data->description,
            ),
        );
    }

    public static function subscribedTo(): array
    {
        return [
            TicketCreated::class,
        ];
    }
}
