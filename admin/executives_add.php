<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$position = mysqli_real_escape_string($conn, $_POST['position']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], './images/executives/'.$filename);	
		}
		//generate voters id
		$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$voter = substr(str_shuffle($set), 0, 15);

		$sql = "INSERT INTO users (voters_id, first_name, last_name, avatar, role, position, email, phone) VALUES ('$voter', '$firstname', '$lastname', '$filename', 'executive', '$position', '$email', '$phone')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Executive added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: executives.php');
?>