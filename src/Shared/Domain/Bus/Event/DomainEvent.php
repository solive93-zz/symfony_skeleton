<?php

declare(strict_types=1);

namespace App\Shared\Domain\Bus\Event;

use App\Shared\Domain\ValueObject\Ulid;

abstract class DomainEvent
{
    protected string $aggregateId;
    protected string $eventId;
    protected string $occurredOn;

    public function __construct(
        string $aggregateId,
        ?string $eventId = null,
        ?string $occurredOn = null
    ) {
        $this->aggregateId = $aggregateId;
        $this->aggregateId = $eventId ?? Ulid::random()->value();
        $this->occurredOn = $occurredOn ?? (new \DateTimeImmutable())->format('d-m-Y H.i:s');
    }
}
