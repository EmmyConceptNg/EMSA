<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		if($_SESSION['admin'] = $id || $_SEESION['admin_type'] == 'admin'){
			$_SESSION['error'] = 'You Cannot Delete an Admin';
		}else{
			$sql = "DELETE FROM admin WHERE id = '$id'";
			if($conn->query($sql)){
			$_SESSION['success'] = 'Admin deleted successfully';
			}
			else{
			$_SESSION['error'] = $conn->error;
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: admin.php');
	
?>