<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$position = mysqli_real_escape_string($conn, $_POST['position']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        

        $sql = "UPDATE imsec SET firstname = '$firstname', lastname = '$lastname', position = '$position', email = '$email', phone = '$phone' WHERE id = '$id'";
        
		if($conn->query($sql)){
			$_SESSION['success'] = 'IMSEC Member updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: imsec.php');

?>