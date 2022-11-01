<?php
	include 'database/config.php';
	session_start();

	if(isset($_SESSION['user'])){
		$sql = "SELECT * FROM users WHERE user_id = '".$_SESSION['user']."'";
		$query = $conn->query($sql);
		$voter = $query->fetch_assoc();
	}
	else{
		header('location: ../login-register.php');
		exit();
	}

?>