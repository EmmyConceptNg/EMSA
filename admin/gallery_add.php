<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$description = mysqli_real_escape_string($conn, $_POST['description']);
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], './images/gallery/'.$filename);	
		}

		$sql = "INSERT INTO gallery (photo, description) VALUES ('$filename', '$description')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Image added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: gallery.php');
?>