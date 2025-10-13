<?php
session_start();
session_destroy();
$_SESSION = [];
header ('location:9.php');
die;
?>