<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="isi nama anda">

        <input type="file">
        <button type="submit">kirim</button>
        <button type="reset">reset</button>
    </form>
</body>

</html>

<?php

if (isset ($_POST['kirim'])){
    $nama = $_POST ['nama'];
    echo "nama saya adalah" . $nama;
}
?>