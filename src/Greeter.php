<?php

namespace Hellokit;

class Greeter
{
    public function greet(string $name = 'world'): string
    {
        return "Hi, {$name}!";
    }
}
