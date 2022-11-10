<?php

declare(strict_types=1);

namespace Tests\Integration\Shared\Domain\ValueObject;

use App\Shared\Domain\Exception\InvalidUlidException;
use App\Shared\Domain\ValueObject\Ulid;
use PHPUnit\Framework\TestCase;

class UlidTest extends TestCase
{
    public function test_should_always_be_valid()
    {
        self::expectException(InvalidUlidException::class);
        Ulid::fromString('INVALID');
    }

    public function test_should_be_stringable()
    {
        self::assertIsString((string) Ulid::random());
    }
}
