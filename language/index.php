<?php 
session_start();
if(isset($_SESSION))
{
    echo $_SESSION['name'];
}
else
{
    echo "session not set";
}


?>
<form action="index2.php" method="post">
    <input type="text" name="text">
    <select name="lang">
        <option value="english">english</option>
        <option value="gujarati">gujarati</option>
    </select>
    
    <input type="submit" name="submit" value="submit">
</form>