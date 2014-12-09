<?php 
session_start();
$name = $_POST['text'];
$lang = $_POST['lang'];
$_SESSION['name'] = $name;
$_SESSION['lang'] = $lang;

if($_SESSION['lang'] == 'gujarati')
{
    header("Location:index3.php");
}
else
{
    
    echo "you selected english";
}




?>
