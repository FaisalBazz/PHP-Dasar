<?php 

$nilai = 10;
$absen = 90;

if($nilai >= 80 && $nilai >= 80)
{
    echo "Nilai anda A". PHP_EOL;
} 
else if ($nilai >= 70 && $nilai >= 70)
{
    echo "Nilai anda B". PHP_EOL;
}
else if ($nilai >= 60 && $nilai >= 60)
{
    echo "Nilai anda C". PHP_EOL;
}
else if ($nilai >= 50 && $nilai >= 50)
{
    echo "Nilai anda D". PHP_EOL;
}
else
{
    echo "Nilai anda E". PHP_EOL;
}

// menggunakan : dan endif;
if($nilai >= 80 && $nilai >= 80) :
    echo "Nilai anda A". PHP_EOL;
 
elseif ($nilai >= 70 && $nilai >= 70):
    echo "Nilai anda B". PHP_EOL;

elseif ($nilai >= 60 && $nilai >= 60):
    echo "Nilai anda C". PHP_EOL;

elseif ($nilai >= 50 && $nilai >= 50):
    echo "Nilai anda D". PHP_EOL;

else :
    echo "Nilai anda E". PHP_EOL;
endif;