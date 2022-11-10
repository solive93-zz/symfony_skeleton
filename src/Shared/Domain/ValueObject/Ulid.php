<?php

declare(strict_types=1);

namespace App\Shared\Domain\ValueObject;

use App\Shared\Domain\Exception\InvalidUlidException;
use Symfony\Component\Uid\Ulid as SymfonyUlid;

class Ulid
{
    protected string $value;

    private function __construct(string $value)
    {
        $this->ensureIsValid($value);
        $this->value = $value;
    }

    public static function random(): static
    {
        return new self(
            SymfonyUlid::generate()
        );
    }

    public static function fromString(string $ulid): static
    {
        return new self ($ulid);
    }

    public function value(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    /**
     * @throws InvalidUlidException
     */
    private function ensureIsValid(string $ulid): void
    {
        if (!SymfonyUlid::isValid($ulid)) {
            throw new InvalidUlidException();
        }
    }
}
