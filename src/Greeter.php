<?php

declare(strict_types=1);

namespace App;

final class Greeter
{
    public function greet(string $name): string
    {
        $name = trim($name);

        if ($name === '') {
            $name = 'World';
        }

        return sprintf('Hello, %s!', $name);
    }
}
