<?php
// Looping(Perulangan) struktur kode yang digunakan menjalankan blok kode selama kondisi tertentu terpenuhi

for ($i = 1; $i <= 10; $i++):
    echo $i .  ". Saya berjanji tidak terlambat lagi <br>";
endfor;

echo "<br><br>";
$a = 1;
while ($a <= 10) {
    echo $a . ". Aku minta maaf <br>";
    $a++;
}

echo "<br><br>";

$j = 1;
do {
    echo $j . ".Aku minta maaf <br>";
    $j++;
} while ($j <= 10);

echo "<br>";

for ($x = 1; $x <= 10; $x++) {
    if ($x == 5) {
        continue;  //looping//
    } 
    echo $x . "<br>";
}
