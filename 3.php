<?php
$keranjang = "Semangka, Salak, Melon";
$keranjang_array = ["Semangka", "Salak", "Melon"];
$keranjang_array[] = "Mangga";
$keranjang_array[] = "Nanas";

array_push($keranjang_array, "mangga", "nanas");

echo "Keranjang: " . $keranjang . "<br>";
print_r($keranjang_array);
echo "<br>";
echo "Saya mau buah " . $keranjang_array[1] . "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo "<h1>Array Assosiative</h1>";
//element access nya di akses menggunakan string atau integer yang di tetapkan 

$peserta = [
    [
        "nama" => "Muhammad Noval",
        "umur" => 30,
        "kelas" => "Web Programming",
    ],
    [
        "nama" => "Muhammad Udin",
        "umur" => 25,
        "kelas" => "mobile Programming",
    ]
];

print_r($peserta);
echo "<br>";

foreach ($peserta as $key => $siswa) {
    echo $siswa['nama'] . " ini adalah index ke " . $key;
}

echo "nama peserta :" . $peserta[0]['nama'] . "<br>";
echo "umur :" . $peserta[0]['umur'] . "<br>";
echo "kelas :" . $peserta[0]['kelas'] . "<br>";
