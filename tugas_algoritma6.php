<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action=" " method="post" enctype="multipart/form-data">
        <label for="">Uang Sendiri</label>
        <input type="number" name="uangSendiri" placeholder="Isi uang sendiri"><br>
        <label for="">Uang Teman</label>
        <input type="number" name="uangTeman" placeholder="Isi uang teman anda"><br>



        <button type="submit" name="jumalahkan">Jumlahkan</button>

    </form>
</body>

</html>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $angka1 = intval($_POST['uangSendiri']);
    $angka2 = intval($_POST['uangTeman']);


    $hasil = $angka1 + $angka2;


    echo "Hasil penjumlahan dari " . $angka1 . " + " . $angka2 . " adalah: " . $hasil;
}
?>