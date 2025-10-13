<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<?php
$nama = 'Muhammad Noval Saputra';
$umur = 30; //integer
$beratBadan = 50.3;

$nama = "Reza";
// Define 
define("nama", "Muhammad Noval Saputra");
// const
const posisi  = "Striker";
?>
<h1>Selamat datang <?php echo $nama; ?></h1>
<?php
echo `<p>$umur</p> <p>$beratBadan</p>`;
echo "Nama Pemain:" . nama . "<br>";
echo "Posisi:" . posisi . "<br>";
?>;


</body>

</html>