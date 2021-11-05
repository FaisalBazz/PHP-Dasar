<?php

$buat = true;
if ($buat) {
    function sayhello($nama, $umur = 0)
    {
        echo "hello " . $nama . " umur : " . $umur . PHP_EOL;
    }
}


sayhello("faisal");

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total = $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

function sumall(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total =  " . implode(",", $values) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];
sumall(1, 2, 3, 4, 5);
sumall(...$values);
