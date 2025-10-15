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
        <input type="number" name="uangSendiri"><br>
        <label for="">Uang Teman</label>
        <input type="number" name="uangTeman"><br>
        <button type="submit" name="hitung">hitung</button>
    </form>
    
</body>

</html>

<?php
if (isset($_POST['hitung'])) {
    $uangSendiri = floatval($_POST['uangSendiri']);
    $uangTeman = floatval($_POST['uangTeman']);
    $hitung = $uangSendiri + $uangTeman;

    echo "<h3>Nilainya: Rp. " . number_format($hitung, 2, ',', '.') . "</h3>";
}
?>
</body>