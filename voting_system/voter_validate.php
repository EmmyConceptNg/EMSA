<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_SESSION['voter'])){
	header('location: home.php');
	}

	if(isset($_POST['login'])){
		$voter = $_POST['voter'];

		$sql = "SELECT * FROM voters WHERE voters_id = '$voter'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find voter with the ID';
		}
		
	}
	else{
		$_SESSION['error'] = 'Input voter credentials first';
	}

	header('location: home.php');

?>