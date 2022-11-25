<?php

declare(strict_types=1);

namespace Domain\Shared\Subscriber;

interface SubscriberInterface
{
    public static function subscribedTo(): array;
}
