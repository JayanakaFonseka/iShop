<?php
$SESSION["name"] = "name";
$servername = "localhost:3312";
$username = "root";
$password = "";
$dbname = "ishop";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connections
	if (! $conn) { 
    	die("Connection failed! : " . mysqli_connect_error); 
	}
	//else{ echo "Connected successfully !";
	//}

 ?>