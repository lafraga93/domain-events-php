<?php

declare(strict_types=1);

namespace Domain\Notification\Service;

use Domain\Notification\Entity\Notification;
use Domain\Notification\Repository\NotificationRepositoryInterface;
use Infrastructure\Log\Logger;

final class Create
{
    public function __construct(
        private readonly NotificationRepositoryInterface $repository,
    ) {
    }

    public function handle(Input $input): void
    {
        $notification = new Notification(
            $input->title,
            $input->description,
        );

        Logger::log('notification create invoked');

        $this->repository->push($notification);
    }
}
