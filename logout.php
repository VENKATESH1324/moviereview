<?php



session_start();
if(isset($_SESSION['username'])){
session_destroy();
$_SESSION = array();
echo "Logout is successful<a href='loginscreen.php'>login</a><br>";
}




?>