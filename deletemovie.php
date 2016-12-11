<?php

require_once 'dbinfo.php';
require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if(isset($_GET['idno'])) {
	$idno=$_GET['idno'] ; }
	$query="DELETE FROM moviedb WHERE id='$idno'";
	$result=$conn->query($query);
	if(!$result) echo "DELETE failed: $query <br>" .
	$conn->error . "<br><br>";
	
	echo <<<_END
	<pre>Delete movie successful</pre>
	</br></br>
	<a href="moviehome.php">View all movies</a>
	<a href="logout.php">logout</a>
_END;


//$result->close();
$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}


?>