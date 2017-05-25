<?php
	include 'header.html';
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "animal";
	
	$searchTerm = $_GET["search"];
	$resultsFound = "False";
	
	// Create connection
	$connection = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($connection->connect_error) {
		  die("Connection failed: " . $connection->connect_error);
	 } else { 
		echo "Here are your results! <br>";
	}
	$sql = "SELECT * FROM animal";
	$result = $connection->query($sql);
	
	if ($result->num_rows > 0) {
	    // output data of each row
		
	    while($row = $result->fetch_assoc()) {
		if ($row["AnimalName"] == $searchTerm or $row["Category"] == $searchTerm){
			$resultsFound = "True";
	            echo "ID - " . $row["AnimalID"]. ",  Name - " . $row["AnimalName"]. ", Category - " . $row["Category"]. ", Location - " . $row["BestPlaceToSee"] .".<br>";                                                      
		}
		else{
		
		;}}
	 
		}
	if ($resultsFound == "False") {
		echo ("We can't find any $searchTerm(s). Sorry about that!");}
	
	
	$connection->close();

	include 'footer.html';
?>


