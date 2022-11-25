<?php

declare(strict_types=1);

use Domain\Ticket\Service\Create\Create;
use Domain\Ticket\Service\Create\Input;
use Infrastructure\Event\InMemoryEventBus;
use Infrastructure\Repository\TicketRepository;

require_once __DIR__ . '/vendor/autoload.php';

$createService = new Create(
    new TicketRepository(),
    new InMemoryEventBus(),
);

$createService->handle(
    new Input(
        '812ffb89-c6a4-4ac9-8125-630d2be32351',
        'Problemas Login APP',
        'Usuário relata que não consegue realizar login no aplicativo',
    ),
);
