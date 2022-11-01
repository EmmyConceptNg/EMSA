<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$question_no = mysqli_real_escape_string($conn, $_POST['question_no']);

		
		$sql = "INSERT INTO subjects (name, question_no) VALUES ('$name', '$question_no')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Subject added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: subjects.php');
?>