<?php

declare(strict_types=1);

namespace Infrastructure\Event;

use Domain\Notification\Service\Create;
use Domain\Notification\Subscriber\NotifyOnTicketCreation;
use Domain\Shared\Event\EventInterface;
use Domain\Shared\Subscriber\SubscriberInterface;
use Infrastructure\Repository\NotificationRepository;

final class InMemoryEventBus
{
    public function __construct(
        private $subscribers = [
            new NotifyOnTicketCreation(
                new Create(
                    new NotificationRepository(),
                ),
            ),
        ],
    ) {
    }

    /**
     * @param EventInterface[] $events
     */
    public function publish(array $events): void
    {
        array_walk($events, function ($event) {
            $subscribers = $this->getSubscribersForEvent($event);
            $this->dispatch($event, $subscribers);
        });
    }

    private function getSubscribersForEvent(EventInterface $event): array
    {
        return array_filter(
            $this->subscribers,
            fn (SubscriberInterface $subscriber) => in_array($event::class, $subscriber::subscribedTo()),
        );
    }

    /**
     * @param SubscriberInterface[] $subscribers
     */
    private function dispatch(EventInterface $event, array $subscribers): void
    {
        array_walk($subscribers, fn ($subscriber) => $subscriber($event));
    }
}
