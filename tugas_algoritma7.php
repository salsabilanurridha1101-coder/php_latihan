<?php
echo "<h3>Menghitung Nilai Awal dan Nilai Perbaikan</h3>";
echo "Nilai awal : 75 <br>";
echo "Nilai perbaikan : 80 <br>";

$NilaiAwal = 75;
$NilaiPerbaikan = 80; 

echo "simpan nilai awal ke variabel nilai perbaikan <br>";
echo "Nilai perbaikan : $NilaiAwal <br>";
echo "Nilai awal : $NilaiPerbaikan <br>";
$NilaiPerbaikan = $NilaiAwal;
$NilaiAwal = $NilaiPerbaikan;

