<?php

$counter = 10;

while ($counter >= 1) {
    echo "ini adalah while ke : " . $counter . PHP_EOL;
    $counter--;
}

$counter = 1;
while ($counter <= 10) :
    echo "ini adalah while ke : " . $counter . PHP_EOL;
    $counter++;
endwhile;
