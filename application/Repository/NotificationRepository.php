<?php

declare(strict_types=1);

namespace Infrastructure\Repository;

use Domain\Notification\Entity\Notification;
use Domain\Notification\Repository\NotificationRepositoryInterface;

final class NotificationRepository implements NotificationRepositoryInterface
{
    public function push(Notification $notification): void
    {
    }
}
