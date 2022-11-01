<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$description = mysqli_real_escape_string($conn, $_POST['description']);

		$imageFilename = $_FILES['image']['name'];
		if(!empty($imageFilename)){
		move_uploaded_file($_FILES['image']['tmp_name'], 'images/materials_images/'.$imageFilename);
		}else{
			$imageFilename = 'emsa_library.png';
		}

		$filename = $_FILES['filename']['name'];
		if(!empty($filename)){
			$filename = preg_replace(array('/[^\w\s]+/', '/[^a-zA-Z0-9]+/'), array('', '_'), $filename);
		move_uploaded_file($_FILES['filename']['tmp_name'], 'materials/'.$filename);
		}

		$sql = "INSERT INTO materials (`name`, `photo`, `file`) VALUES ('$description', '$imageFilename', '$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Materials added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: materials.php');

?>



