<?php
session_start();
session_regenerate_id();

//JIKA SESSION 'EMAIL' MATI, MAKA KEMBALI KE 9.PHP//
if (empty($_SESSION['EMAIL'])) {
    header('location;9.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>SYELAMAT DATYANGH QHA QHA <?php echo $_SESSION['EMAIL'] ?></h1><br>
    <button>
        <a href="logout.php">log-out</a>
    </button>

</body>

</html>