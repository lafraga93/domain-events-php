<?php

declare(strict_types=1);

namespace Domain\Notification\Repository;

use Domain\Notification\Entity\Notification;

interface NotificationRepositoryInterface
{
    public function push(Notification $notification): void;
}
