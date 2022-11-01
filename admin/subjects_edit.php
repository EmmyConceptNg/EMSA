<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$question_no = mysqli_real_escape_string($conn, $_POST['question_no']);

		$sql = "UPDATE subjects SET name = '$name', question_no = '$question_no' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Subject updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: subjects.php');

?>