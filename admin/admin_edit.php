<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
		
			$sql = "UPDATE admin SET firstname = '$firstname', lastname = '$lastname', user_type = '$user_type' WHERE id = '$id'";
			
			if($conn->query($sql)){
				$_SESSION['success'] = 'Admin updated successfully';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
		
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: admin.php');

?>