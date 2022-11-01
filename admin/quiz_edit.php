<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){


		$name = mysqli_real_escape_string($conn, ucwords(strtolower($_POST['name'])));
		$total = mysqli_real_escape_string($conn, $_POST['total']);
		$right = mysqli_real_escape_string($conn, $_POST['right']);
		$wrong = mysqli_real_escape_string($conn, $_POST['wrong']);
		$time = mysqli_real_escape_string($conn, $_POST['time']);

		
		$sql = "INSERT INTO quiz (title, total, sahi, wrong, time) VALUES ('$name', '$total', $right, $wrong, $time)";
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

	header('location: questions.php');
?>