<?php

declare(strict_types=1);

namespace Tests;

use App\Greeter;
use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    public function testGreetsByName(): void
    {
        $this->assertSame('Hello, Alex!', (new Greeter())->greet('Alex'));
    }

    public function testFallsBackToWorld(): void
    {
        $this->assertSame('Hello, World!', (new Greeter())->greet('   '));
    }
}
