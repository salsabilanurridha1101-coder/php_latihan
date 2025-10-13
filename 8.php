<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <label for="">Email</label>
        <input type="Email" name="Email" placeholder="masukan email Anda">
        <label for="">Password</label> <br>
        <input type="password" name="password"><br>
        <button type="submit">submit</button>
</body>

</html>

<!-- buat program sederhana dengan satu buah input bernama nilai
 jika nilai lebih dari 90 sampai 100 maka gradenya A
 jika nilai lebih dari 80 sampai 89 maka gradenya B
  jika nilai lebih dari 70 sampai 79 maka gradenya C
  jika nilai lebih dari 60 sampai 69 maka gradenya D
  jika nilai lebih dari 0 sampai 59 maka gradenya E
-->


<?php
$nama = 'nur ridha salsabila';
if ($nama !== "nur ridha salsabila") {
    echo "ya";
}

$nilai = 100;

if (isset($_POST['nilai'])) {
    $nilai = $_POST['nilai'];
    echo "<h1>Nilai anda : $nilai</h1>";
}
switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        echo "Grade:A";
        break;
    case ($nilai >= 80 && $nilai <= 89):
        echo "Grade:B";
        break;
    case ($nilai >= 70 && $nilai <= 79):
        echo "Grade:C";
        break;
    case ($nilai >= 60 && $nilai <= 69):
        echo "Grade:D";
        break;
    case ($nilai >= 0 && $nilai <= 59):
        echo "Grade:E";
        break;
    default:
        echo "Grade:Invalid";
        break;
}
switch ($nilai >= 70) {
    case true:
        echo "<br>Selamat Anda Lulus";
        break;
    case false:
        echo "<br>Maaf Anda Tidak Lulus";
        break;
}
?>