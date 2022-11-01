<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$position = mysqli_real_escape_string($conn, $_POST['position']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        

        $sql = "UPDATE users SET first_name = '$firstname', last_name = '$lastname', position = '$position', email = '$email', phone = '$phone' WHERE user_id = '$id'";
        
		if($conn->query($sql)){
			$_SESSION['success'] = 'Executive updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: executives.php');

?>