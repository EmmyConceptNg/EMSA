<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$description = mysqli_real_escape_string($conn, $_POST['description']);
		$description = strtolower($description);

		$imageFilename = $_FILES['image']['name'];
		if(!empty($imageFilename)){
		move_uploaded_file($_FILES['image']['tmp_name'], 'images/materials_images/'.$imageFilename);
		}

		$filename = $_FILES['filename']['name'];
		if(!empty($filename)){
			$filename = preg_replace(array('/[^\w\s]+/', '/[^a-zA-Z0-9]+/'), array('', '_'), $filename);
		move_uploaded_file($_FILES['filename']['tmp_name'], 'materials/'.$filename);
		}

		$sql = "UPDATE materials SET name = '$description', photo = '$imageFilename', file = '$filename' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Materials updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: materials.php');

?>