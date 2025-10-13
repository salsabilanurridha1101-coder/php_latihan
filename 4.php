
<?php
$nama = 'nur ridha salsabila';
if ($nama !== "nur ridha salsabila") {
    echo "ya";
} else {
    echo "tidak";
}
echo "<br>";



$nilai = 73;
if ($nilai >= 90) {
    $grade = "A";
} else if ($nilai >= 80) {
    $grade = "B";
} else if ($nilai >= 70) {
    $grade = "C";
} else if ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

if ($nilai >= 60) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

echo "Nama :" . $nama . "<br>";
echo "Nilai :" . $nilai . "<br>";
echo "Grade :" . $grade . "<br>";
echo "lulus :" . $status . "<br>";




echo "<br><br>";

$warna = "merah";
if ($warna == "kuning") {
    echo "warna favorit kuning";
} elseif ($warna == "hijau") {
    echo "warna favorit hijau";
} else {
    echo "Terserah";
};

switch ($warna) {
    case "merah":
        echo "warna favorite merah";
        break;
    case "kuning";
        echo "warna favorite kuning";
        break;
    case "hijau";
        echo "warna favorite hijau";
        break;
    default:
        echo "terserah warna apa saja";
        break;
};
