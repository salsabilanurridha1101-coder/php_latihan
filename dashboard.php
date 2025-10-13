<?php
session_start();

//JIKA SESSION 'EMAIL' MATI, 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>SYELAMAT DATYANGH QHA QHA <?php echo $_SESSION['EMAIL'] ?> </h1>

    <button>
        <a href="logout.php">log-out</a>
    </button>

</body>

</html>