<?php
$hewan = ["Kucing","Kuda","Kelinci","Kangguru","Koala","Keledai"];
echo $hewan[0] . "<br>"; //output kucing
echo $hewan[5] . "<br>"; //output keledai
echo "<br>";

foreach ($hewan as $key => $value) {
    echo $value . "<br>" ;
}

echo "<br>";
$hewan[2] = "Kukang"; //re-assign / mengganti nilai array
echo $hewan[2];