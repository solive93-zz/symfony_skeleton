<?php

declare(strict_types=1);

namespace Tests\Integration\Shared\Domain\ValueObject;

use App\Shared\Domain\ValueObject\TextString;
use PHPUnit\Framework\TestCase;

class TextStringTest extends TestCase
{
    public function test_should_be_stringable()
    {
        self::assertIsString((string) new TextString('Heey'));
    }
}
