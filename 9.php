<?php
if (isset($_POST['submit'])) {
    session_start();
    $inputkanEmail = htmlspecialchars($_POST['email']);
    $inputkanPassword = htmlspecialchars($_POST['password']);

    $users = [
        ["email" => "beni@gmail.com", "pass" => "1234"],
        ["email" => "banu@gmail.com", "pass" => "1254"],
        ["email" => "bunny@gmail.com", "pass" => "23424"]
    ];

    $isValid = false;

    foreach ($users as $user) {
        if ($inputkanEmail == $user['email'] && $inputkanPassword == $user['pass']) {
            $_SESSION['EMAIL'] = $user['email'];
            header("location:dashboard.php");
            exit; 
        }
    }

    header("location:9.php?error=invalid");
    exit;
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
    <?php
    if (isset($_GET['error']) && $_GET['error'] == "invalid") {
        echo "<script>alert('Email atau Password salah');</script>";
    }
    if (isset($_SESSION ['EMAIL'])){
        echo "<a href='dashboard.php'>home</a>";
    }
    ?>


    <form action="" method="post">
        <label for="">Email</label> <br>
        <input type="email" name="email" required><br>
        <label for="">Password</label> <br>
        <input type="password" name="password"><br>

        
        <button type="submit" name="submit">submit</button>
</body>

</html>