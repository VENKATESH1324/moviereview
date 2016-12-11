<?php
//info for connection

require_once 'dbinfo.php';
require_once 'checksession.php';

//establish connection
$conn = mysqli_connect($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

//get variable from previous page 
if(isset($_GET['movie'])){
	
	$movie = $_GET['movie'];
	//echo 'movie id: '.$movie;
	
}

//query to fetch corresponding content

$query="Select * FROM moviedb where movie_name='$movie'";
$result = $conn->query($query);   
if (!$result) echo "Query execution failed:$query<br>" . $conn->error . "<br><br>";

$rows=$result->num_rows;
for($j=0; $j<$rows; $j++)  {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_NUM);

//html page display	
echo <<<_END


<html>
<head>
<title>$row[1]</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">


</head>
<body>

<div class="w3-container w3-teal">
 <h1 class="w3-center">$row[1]<a class="active" href="moviehome.php"><button style="float:right;color:orange">Home</button></a></h1>
   <a href="logout.php">logout</a>
</div>

<div>
<img src="$row[13]" class="w3-round-large"  style="width:450px ; height:500px ;float:left;border: 2px solid black" >

<p> <strong> Director:</strong>$row[3]</p>
<p> <strong>Writing-Credits: </strong> $row[4]</p>
<p> <strong>Duration:</strong>$row[5] </p>
<p> <strong>Stars:</strong> $row[6]</p>
<p> <strong>Storyline:</strong> $row[7]</p>
<p><strong>Genres: </strong>$row[8]</p>
<p><strong>Release-Date:</strong>$row[9]</p>
<p><strong> Language: </strong> $row[10]</p>
<p><strong>Budget: </strong> $row[11]</p>
<p><strong>Country:</strong> $row[12]</p>
<br>
<br>


</div>

</body>
</html>

_END;
}


?>