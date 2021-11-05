<?php

$firstName = "Faisal";
$lastName = "Basri";

$anonymousFunction = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn () =>  "Hello $firstName $lastName" . PHP_EOL;

$anonymousFunction();
echo $arrowFunction();
