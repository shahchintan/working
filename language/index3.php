<?php 
session_start();
if(isset($_SESSION['lang']))
{
    echo "session set";
}

 else 
    
 {
    echo "session not set";
 }
?>
<a href="signout.php">signout</a>