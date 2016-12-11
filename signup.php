<?php
require_once 'dbinfo.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);



$salt1 = 'qm&h*';
$salt2 = 'pg!@';
 
if(isset($_POST['submit'])) {
$forename = $_POST['forename'];
$surname  = $_POST['surname'];
$username = $_POST['username'];
$password = $_POST['password'];
$token= hash('ripemd128',"$salt1$password$salt2");


add_user($conn,$forename,$surname,$username,$token);
}


 function add_user($conn, $fn, $sn, $un, $pw){
 
 $query="INSERT INTO users values('$fn','$sn','$un','$pw')";
 $result=$conn->query($query);
 if(!$result) die ($conn->error);
 
 }


echo<<<_END

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<div>
<form method="post" action="signup.php">

	FORENAME<input type="text" name="forename" placeholder="please enter your forename"></input></BR></BR>
	SURNAME<input type="text" name="surname" placeholder="please enter your surname"></input></BR></BR>
	USERNAME<input type="text" name="username" placeholder="please enter your username"></input></BR></BR>
	PASSWORD<input type="text" name="password" placeholder="please enter your password"></input></BR></BR>
	<input type="submit" name="submit"></input>
	<a href="loginscreen.php">Log in</a>






</form>
</div>
_END;






?>