<?php

	$servername = 'localhost';
	$username 	= 'root';
	$password 	= 'timpocovalen';
	$db			= 'bank';

	$conn = @new mysqli($servername, $username, $password, $db);

	if($conn->connect_error) {
		echo "Error:" . $conn->connect_error;
	}

?>