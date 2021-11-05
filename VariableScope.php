<?php

$nama = "Faisal";

function sayHello()
{
    global $nama;
    echo "Hello $nama" . PHP_EOL;
}
sayHello();

function increment()
{
    static $counter = 1;

    echo "Counter = $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
