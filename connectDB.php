<?php
/* Database connection settings */
    $servername = "remotemysql.com";
    $username = "X4CGbqy7a";		//put your phpmyadmin username.(default is "root")
    $password = "v80CsbsRTm";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "EX4CGbqy7a";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>
