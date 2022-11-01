<?php
	include '../includes/conn.php';
	session_start();

	if(isset($_SESSION['user']) && $_SESSION['user'] !== 'student'){
		$myfname = $_SESSION['first_name'];
	$myuname = $_SESSION['username'];
	$mylname = $_SESSION['last_name'];
	$mygender = $_SESSION['gender'];
	$mydob = $_SESSION['dob'];
	$myaddress = $_SESSION['address'];
	$myemail = $_SESSION['email'];
	$myphone = $_SESSION['phone'];
	$mydepartment = $_SESSION['department'];
	$myrole = $_SESSION['role'];
	$myavatar = $_SESSION['avatar'];
		$myid = $_SESSION['myid'];
	$mycategory = $_SESSION['mycategory'];
	}
	else{
		header('location: ../index.php');
		exit();
	}

?>