<?php
unset($_SESSION['name']);
$_SESSION['name'] = '';
session_destroy();

header("Location:index.php");


?>
