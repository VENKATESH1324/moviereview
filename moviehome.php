<?php

require_once 'dbinfo.php';
require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query="SELECT * FROM moviedb";
$result=$conn->query($query);
if(!$result) die ($conn->error);

echo<<<_END
	<div class="w3-container w3-teal">
		<h1 class="w3-center" style="text-align:center">Movies List<button style="float:right;color:orange" onclick="location='addmovie.php'">Add Movie</button></h1>
		<a href="logout.php">logout</a>

	</div>

_END;


$rows=$result->num_rows;
for($j=0; $j<$rows; $j++) {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_NUM);
	
echo <<<_END
	
<html>

 <link rel="stylesheet" href="mycss.css">
 <div class="w3-row">
 <div class="w3-third w3-container "> 

<p><img src="$row[13]" class="w3-round-large"  style="width:100% ; height:260px; border: 2px solid black"/></p>
  
 </div> 
	<div style="text-align:center" class="w3-twothird w3-container">
		<form action="update.php" method="post">
			<h3 align="center"><strong> $row[1]</strong></h3>
			<p style="font-size:14px"><u> $row[2] </u></p>
			<p style="font-size:14px"> <strong>Director:</strong> $row[3] </p>
			<p style="font-size:14px"><strong>writers:</strong>  $row[4]</p>
			<p style="font-size:14px"><strong>stars:</strong> $row[6] </p>
			<input type="hidden" name="update" value="yes">
			<input type="hidden" name="movieid" value="$row[0]">
			<button class="w3-btn w3-red w3-text-shadow" type="submit name="update" value="update">Update</button></a>
		</form>

	    <a href="viewdetail.php?movie=$row[1]"><button class="w3-btn w3-red w3-text-shadow">View detail</button></a>
        <a href="deletemovie.php?movie=$row[1]"><button class="w3-btn w3-red w3-text-shadow">Delete</button></a>
	
 
	</div>

</div>
<br/>
</br>
</br>
</br>
</html>
_END;
		
}

$result->close();
$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}



?>