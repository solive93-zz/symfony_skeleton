<?php

declare(strict_types=1);

namespace App\Shared\Domain;

use App\Shared\Domain\Bus\Event\DomainEvent;

abstract class AggregateRoot
{
    protected array $domainEvents = [];

    final protected function recordThat(DomainEvent $domainEvent): void
    {
        $this->domainEvents[] = $domainEvent;
    }

    final protected function pullDomainEvents(): array
    {
        $domainEvents = $this->domainEvents;
        $this->domainEvents = [];

        return $domainEvents;
    }
}
