<?php 

$values = array (1,2,4,7.5);
var_dump($values);

$name = ["Faisal", "Basri", "Aditya"];
var_dump($name);

// 1. $array[index] = mengakses data di array pada nomor index
var_dump($name[0]);

// 2. $array[index] = Value  = mengubah data di array pada nomor index dengan value baru   
$name[2] = "Nurdiansyah";
var_dump($name);

// 4. unset($array[index]) = menghapus data dan otomotis index terhapus
unset($name[1]);
var_dump($name);

// 3. $array[] = value = menambah data di posisi paling belakang
$name [] = "Faisal";
var_dump($name);

// 5. count($array) = menghitung jumlah total array
var_dump(count($name));

$faisal = array(
    "id" => "Faisal",
    "Nama" => "Faisal Basri",
    "age" => 21
);
var_dump($faisal);
var_dump($faisal["Nama"]);

$adit = [
    "id" => "Adit",
    "nama" => "aditya Nurdiansyah",
    "age" => 12,
    "adress" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
// var_dump($adit);
var_dump($adit["adress"]["country"]);



