<?php

function foo()
{
    echo "foo";
}

function bar()
{
    echo "bar" . PHP_EOL;
}

$variablefunctionname = "foo";
$variablefunctionname();

$variablefunctionname = "bar";
$variablefunctionname();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sample(string $name): string
{
    return "sample  $name" . PHP_EOL;
}

sayHello("Faisal", "sample");
sayHello("Faisal", "strtoupper");
sayHello("Faisal", "strtolower");
