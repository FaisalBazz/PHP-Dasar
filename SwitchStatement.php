<?php 

$nilai = "A";
// menggunakan kurung kurawal {}
switch($nilai) {
    case "A" : echo "Anda lulus dengan sangat baik". PHP_EOL;
        break;
    case "B" :
    case "C" : echo "anda Lulus". PHP_EOL;
        break;
    case "D" : echo "anda tidak lulus". PHP_EOL;
        break;
    default : echo "Mungkin anda salah jurusan". PHP_EOL;
}

// mengguanakan : dan endswitch;
switch($nilai) :
    case "A" : echo "Anda lulus dengan sangat baik". PHP_EOL;
        break;
    case "B" :
    case "C" : echo "anda Lulus". PHP_EOL;
        break;
    case "D" : echo "anda tidak lulus". PHP_EOL;
        break;
    default : echo "Mungkin anda salah jurusan". PHP_EOL;
    endswitch;