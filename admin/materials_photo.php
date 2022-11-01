<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['image']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['image']['tmp_name'], '../images/materials_images/'.$filename);	
		}
		
		$sql = "UPDATE materials SET photo = '$filename' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Photo updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select executive to update photo first';
	}

	header('location: executives.php');
?>