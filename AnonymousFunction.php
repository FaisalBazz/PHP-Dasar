<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Faisal");
$sayHello("Basri");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Faisal", function (string $name): string {
    return strtoupper($name);
});

$fiterFunction = function (string $name): string {
    return strtolower($name);
};

sayGoodBye("Basri", $fiterFunction);

$firstName = "Faisal";
$lastName = "Basri";

$sayHelloFaisal = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloFaisal("Adit", "Nurdiansyah");
