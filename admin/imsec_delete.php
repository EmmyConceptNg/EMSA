<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM imsec WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'IMSEC member deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: imsec.php');
	
?>