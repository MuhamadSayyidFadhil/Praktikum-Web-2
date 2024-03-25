<<<<<<< HEAD
<?php
$nilai = 90;

$keterangan = "";

if($nilai >= 90){
    $keterangan = "Sangat Baik";
} elseif($nilai > 70 || $nilai <= 90) {
    $keterangan = "Lumayan Baik";
} else {
    $keterangan = "oke dah";
}

=======
<?php
$nilai = 90;

$keterangan = "";

if($nilai >= 90){
    $keterangan = "Sangat Baik";
} elseif($nilai > 70 || $nilai <= 90) {
    $keterangan = "Lumayan Baik";
} else {
    $keterangan = "oke dah";
}

>>>>>>> d548c9de96ba5c81a0f60cb2ccf8d0feb78b1384
echo "<h1>$keterangan</h1>";