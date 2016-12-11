<?php
require_once 'dbinfo.php';
require_once 'checksession.php';
$conn = mysqli_connect($hn, $un, $pw, $db);
 if ($conn->connect_error) die($conn->connect_error);
 
		 $movie_name='';
		 $summary= '';
		 $Director= '';
		 $writers= '';
		 $Duration= '';
		 $Stars= '';
		 $Storyline= '';
		 $Genres= '';
		 $Release_date= '';
		 $Language= '';
		 $Budget= '';
		 $Country= '';
		 $image_url= ''; 
		
if(isset($_POST['submit']) && isset($_POST['id'])){
	
		$id= $_POST['id'];
	
	
		
	
		$movie_name= get_post($conn,'movie_name'); 
		$movie_name=sanitizeMySQL($conn, $movie_name);
		 $summary= get_post($conn,'summary');
		$summary=sanitizeMySQL($conn, $summary);
		 $Director= get_post($conn,'Director');
		 $Director=sanitizeMySQL($conn, $Director);
		 $writers= get_post($conn,'writers');
		 $writers=sanitizeMySQL($conn, $writers);
		 $Duration= get_post($conn,'Duration');
		 $Duration=sanitizeMySQL($conn, $Duration);
		 $Stars= get_post($conn,'Stars');
		 $Stars=sanitizeMySQL($conn, $Stars);
		 $Storyline= get_post($conn,'Storyline');
		$Storyline=sanitizeMySQL($conn, $Storyline);
		 $Genres= get_post($conn,'Genres');
		 $Genres=sanitizeMySQL($conn, $Genres);
		 $Release_date= get_post($conn,'Release_date');
		$Release_date=sanitizeMySQL($conn, $Release_date);
		 $Language= get_post($conn,'Lang');
		 $Language=sanitizeMySQL($conn, $Language);
		 $Budget= get_post($conn,'Budget');
		 $Budget=sanitizeMySQL($conn, $Budget);
		 $Country= get_post($conn,'Country');
		 $Country=sanitizeMySQL($conn, $Country);
		 $image_url= get_post($conn,'image_url');
		 $image_url=sanitizeMySQL($conn, $image_url);
		 
		 $query = "UPDATE moviedb SET movie_name='$movie_name',summary='$summary',
		 Director='$Director',writers='$writers',Duration='$Duration',Stars='$Stars',
		 Storyline='$Storyline',Genres='$Genres',Release_date='$Release_date',Lang='$Language',
		 Budget='$Budget',Country='$Country',image_url='$image_url' WHERE id='$id'";
		   $result = $conn->query($query);   
		   if (!$result) echo "UPDATE failed: $query<br>" . $conn->error . "<br><br>";
		   else echo "update successful";
		
		echo '<a href="moviehome.php"><h5>HOME</h5></a>';
     }
	 
if(isset($_POST['update']) && isset($_POST['movieid'])){
	$idno=$_POST['movieid'];
	$query = "SELECT id,movie_name,summary,Director,writers,Duration,Stars,Storyline,Genres,
Release_date,Lang,Budget,Country,image_url FROM moviedb where id='$idno'";
$result = $conn->query($query);   
if (!$result) echo "Query execution failed:$query<br>" .$conn->error . "<br><br>";


 $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)  { 
       $result->data_seek($j);   
	  $idno =  $result->fetch_assoc()['id'] ;
	  $result->data_seek($j);   
	  $movie_name =  $result->fetch_assoc()['movie_name'] ;  
	  $result->data_seek($j); 
	  $summary = $result->fetch_assoc()['summary']    ; 
	  $result->data_seek($j);
	  $Director = $result->fetch_assoc()['Director'] ;  
	  $result->data_seek($j);
	  $writers = $result->fetch_assoc()['writers'] ;  
	  $result->data_seek($j);
	  $Duration = $result->fetch_assoc()['Duration'] ;  
	  $result->data_seek($j);  
	  $Stars = $result->fetch_assoc()['Stars']     ;  
	  $result->data_seek($j);  
	  $Storyline = $result->fetch_assoc()['Storyline']    ; 
	  $result->data_seek($j);  
	  $Genres = $result->fetch_assoc()['Genres']  ;
	  $result->data_seek($j);  
	  $Release_date = $result->fetch_assoc()['Release_date'] ;
	  $result->data_seek($j);  
	  $Language = $result->fetch_assoc()['Lang']     ;
	  $result->data_seek($j);  
	  $Budget = $result->fetch_assoc()['Budget']     ;
	  $result->data_seek($j);  
	  $Country = $result->fetch_assoc()['Country'] ;
	   $result->data_seek($j);  
	  $image_url = $result->fetch_assoc()['image_url'] ;
	
}


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

<form action= "update.php" method="post">
<table border=1px>

<tr>
<td>movie name:</td> <td><input type="text" name="movie_name" value="$movie_name"></td>
</tr>

<tr>
<td>Summary:</td> <td><input type="text" name="summary" value="$summary"></td>
</tr>

<tr>
<td>Director:</td> <td><input type="text" name="Director" value="$Director"></td>
</tr>

<tr>
<td>Writers:</td><td> <input type="text" name="writers" value="$writers"></td>
</tr>

<tr>
<td>Duration:</td> <td><input type="text" name="Duration" value="$Duration"></td>
</tr>

<tr>
<td>Stars:</td><td> <input type="text" name="Stars" value="$Stars"></td>
</tr>

<tr>
<td>Storyline:</td><td> <input type="text" name="Storyline" value="$Storyline"></td>
</tr>

<tr>
<td>Genres:</td><td> <input type="text" name="Genres" value="$Genres"></td>
</tr>

<tr>
<td>Release_date:</td><td> <input type="text" name="Release_date" value="$Release_date"></td>
</tr>

<tr>
<td>Language:</td><td> <input type="text" name="Lang" value="$Language"></td>
</tr>

<tr>
<td>Budget: </td><td><input type="text" name="Budget" value="$Budget"></td>
</tr>

<tr>
<td>Country: </td><td><input type="text" name="Country" value="$Country"></td>
</tr>

<tr>
<td>Image_url: </td><td><input type="text" name="image_url" value="$image_url"></td>
</tr>

<tr>
<td colspan=2>
<input type="hidden" name="submit" value="yes">
<input type="hidden" name="id" value="$idno">
<input type="submit" value="submit"></td>
</tr>
</div>
</table>
</form>
<a href="moviehome.php"><h5>HOME</h5></a>
_END;

}


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

function sanitizeMySQL($conn, $var)
{
$var = $conn->real_escape_string($var);
$var = sanitizeString($var);
return $var;
}







?>