<?php
$result = "";
if (isset($_POST['nilai'])) {
    $nilai = $_POST['nilai'];
    if ($nilai > 0) {
        $result = "Nilai Positif";
    } elseif ($nilai == 0) {
        $result = "nilai 0";
    } elseif ($nilai == null) {
        $result = "";
    } elseif ($nilai < 0) {
        $result = "Nilai Negatif";
    }
}
?>

<form action="" method="post">
    <input type="number" name="nilai" re><br>
    <button type="submit" name="cek">cek</button>
</form>
<span><?php echo $result; ?></span>

