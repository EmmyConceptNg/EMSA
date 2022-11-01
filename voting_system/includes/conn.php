<?php
	$conn = new mysqli('localhost', 'root', '', 'emsa');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>