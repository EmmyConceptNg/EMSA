<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
        
        //passwords
        $password = strtolower($_POST['firstname']);
        $harshpass = password_hash($password, $hash);
        
        //image
        $filename = $_FILES['photo']['name'];
        $date = date('y-m-d');
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], './images/admin/'.$date.$filename);	
		}

		$sql = "INSERT INTO admin (username, firstname, lastname, photo, user_type, password) VALUES ('$firstname',
		'$firstname', '$lastname', '$filename', '$user_type', '$harshpass')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Admin added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: admin.php');
?>