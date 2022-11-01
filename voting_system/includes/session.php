<?php
	include 'includes/conn.php';
	session_start();

	if(isset($_SESSION['voter'])){
		$sql = "SELECT * FROM users WHERE user_id = '".$_SESSION['user']."'";
		$query = $conn->query($sql);
		$voter = $query->fetch_assoc();
	}
	else{
		header('location: '.$_SERVER['DOCUMENT_ROOT'].'/emsa/login-register.php');
		exit();
	}

?>