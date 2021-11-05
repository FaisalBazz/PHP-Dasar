<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Faisal", "strtoupper");
sayHello("Faisal", "strtolower");
sayHello("Faisal", function (string $name): string {
    return strtoupper($name);
});

sayHello("Faisal", fn ($name) => strtoupper($name));
