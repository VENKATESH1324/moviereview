<?php

require_once 'dbinfo.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END

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
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
	<form action='loginscreen.php' method='post'>
	Username: <input type='text' name='username' ></br></br>
	Password: <input type='password' name='password'></br></br>
	<input type='submit'>
	<a href="signup.php">Sign up</a>
	</form>

</div>






_END;





if (isset($_POST['username']) && isset($_POST['password'])) {
	
	$un_temp = mysql_entities_fix_string($conn, $_POST['username']);
	$pw_temp = mysql_entities_fix_string($conn, $_POST['password']);
	
	echo $un_temp.'<br>';
	
	$query = "SELECT * from users where username='$un_temp' ";
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	elseif($result->num_rows){
		$row = $result->fetch_array(MYSQLI_NUM);
		$correct_pw = $row[3];
		$name = $row[0];
		$username=$row[2];
		$result->close();
		
		$salt1 = 'qm&h*';
		$salt2 = 'pg!@';
		$token = hash('ripemd128', "$salt1$pw_temp$salt2" );
		
		if($token == $correct_pw){
			echo "Hi $name you are now logged in as $username";
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['[password']=$password;
			header("Location:moviehome.php");
		}else{
			exit();
		}		
	}else{
		exit();
	}	
		
}else{
	exit();
}

$conn->close();

// sanitize

function mysql_entities_fix_string($conn, $string){
	return htmlentities(mysql_fix_string($conn, $string));
}

function mysql_fix_string($conn, $string){
	if(get_magic_quotes_gpc()) $string = stripslashes($string);
	return $conn->real_escape_string($string);
}


?>



