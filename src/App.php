<?php

declare(strict_types=1);

namespace TestDevCi;

class App
{
    public function doSomething(): string
    {
        $foo = (string)26;
        return $foo;
    }
}
