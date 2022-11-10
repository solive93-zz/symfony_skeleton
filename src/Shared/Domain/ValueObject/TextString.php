<?php

declare(strict_types=1);

namespace App\Shared\Domain\ValueObject;

final class TextString
{
    public function __construct(protected string $value)
    {
    }

    public function value(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value;
    }
}
