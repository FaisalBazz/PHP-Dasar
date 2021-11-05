<?php 

$first = [
    "first_name" => "Faisal"
];

$last = [
    "first_name" => "Adit",
    "last_name" => "Basri"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Faisal",
    "last_name" => "Basri"
];

$b = [
    "last_name" => "Basri",
    "first_name" => "Faisal"
];

var_dump($a !== $b);