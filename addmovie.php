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
<form action="addmovie.php" method="post"<pre>
	movie_name <input type="text" name="movie_name"></br></br>
	summary <input type="text" name="summary"></br></br>
	Director <input type="text" name="Director"></br></br>
	writers <input type="text" name="writers"></br></br>
	Duration <input type="text" name="Duration"></br></br>
	Stars <input type="text" name="Stars"></br></br>
	Storyline <input type="text" name="Storyline"></br></br>
	Genres <input type="text" name="Genres"></br></br>
	Release_date <input type="text" name="Release_date"></br></br>
	Language <input type="text" name="Lang"></br></br>
	Budget <input type="text" name="Budget"></br></br>
	Country <input type="text" name="Country"></br></br>
	image_url <input type="text" name="image_url"></br></br>
	
	<input type="submit" name="ADD MOVIE">
	</div>
	</br></br>
	<a href="moviehome.php" >HOME</a>
	<a href="logout.php">logout</a>
</pre></form>
_END;

if(isset($_POST['movie_name']) &&
	isset($_POST['summary']) &&
	isset($_POST['Director']) &&
	isset($_POST['writers']) &&
	isset($_POST['Duration']) &&
	isset($_POST['Stars']) &&
	isset($_POST['Storyline']) &&
	isset($_POST['Genres']) &&
	isset($_POST['Release_date']) &&
	isset($_POST['Lang']) &&
	isset($_POST['Budget']) &&
	isset($_POST['Country']) &&
	isset($_POST['image_url']) ) {
		$movie_name=get_post($conn, 'movie_name');
		$movie_name=sanitizeString($movie_name);
		$summary=get_post($conn, 'summary');
		$summary=sanitizeString($summary);
		$Director=get_post($conn, 'Director');
		$Director=sanitizeString($Director);
		$writers=get_post($conn, 'writers');
		$writers=sanitizeString($writers);
		$Duration=get_post($conn, 'Duration');
		$Duration=sanitizeString($Duration);
		$Stars=get_post($conn, 'Stars');
		$Stars=sanitizeString($Stars);
		$Storyline=get_post($conn, 'Storyline');
		$Storyline=sanitizeString($Storyline);
		$Genres=get_post($conn, 'Genres');
		$Genres=sanitizeString($Genres);
		$Release_date=get_post($conn, 'Release_date');
		$Release_date=sanitizeString($Release_date);
		$Lang=get_post($conn, 'Lang');
		$Lang=sanitizeString($Lang);
		$Budget=get_post($conn, 'Budget');
		$Budget=sanitizeString($Budget);
		$Country=get_post($conn, 'Country');
		$Country=sanitizeString($Country);
		$image_url=get_post($conn, 'image_url');
		$image_url=sanitizeString($image_url);
		
		$query="INSERT INTO moviedb (movie_name, summary, Director, writers, Duration,Stars,Storyline,Genres,Release_date,Lang,Budget,Country,image_url) VALUES ".
			"('$movie_name','$summary','$Director','$writers','$Duration','$Stars','$Storyline','$Genres','$Release_date','$Lang','$Budget','$Country','$image_url')";
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
	
	//$result->close();
	
}

$conn->close();

//sanitizing code
function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

// alternative sanitizing function

function sanitizeString($var)
{
$var = stripslashes($var);
$var = strip_tags($var);
$var = htmlentities($var);
return $var;
}
/*
function sanitizeMySQL($conn, $var)
{
$var = $connection->real_escape_string($var);
$var = sanitizeString($var);
return $var;
}

*/

?>




