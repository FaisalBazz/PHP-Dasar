<?php

$names = ["Faisal", "Basri", "Adit"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke " . $i . "= $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Nama = $name" . PHP_EOL;
}

$person = [
    [
        "nama" => "Faisal",
        "nim" => "210100018",
        "alamat" => "Bekasi"
    ],
    [
        "nama" => "Rifki",
        "nim" => "190100018",
        "alamat" => "Jakarta"
    ],
    [
        "nama" => "Edrick",
        "nim" => "180100018",
        "alamat" => "Bogor"
    ]

];

foreach ($person as $key) {
    echo "Nama :   " . $key['nama'] . PHP_EOL;
    echo "NIM  :   " . $key['nim'] . PHP_EOL;
    echo "alamat : " . $key['alamat'] . PHP_EOL;
}

echo $person[2]['alamat'];
