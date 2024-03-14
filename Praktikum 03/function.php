<?php
function tambah($nilai1, $nilai2)
{
    echo $nilai1 + $nilai2;
}

tambah(2, 2);
echo "<br>";

function hitungUmur($tahunLahir, $tahunSekarang = 2024)

{
    echo $tahunSekarang - $tahunLahir;
}

hitungUmur(1978);