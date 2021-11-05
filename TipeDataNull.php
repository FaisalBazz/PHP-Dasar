<?php 

$name = "Faisal";
$name= null; 

$age = null;

echo "Nama : ";
echo $name;
echo "\n";

echo "Umur : ";
echo $age;
echo "\n";

echo "Is name null ? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "basri";
unset($contoh);

$contoh = "ada";

var_dump(isset($contoh));