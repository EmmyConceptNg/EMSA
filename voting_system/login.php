<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$voter = $_POST['voter'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM users WHERE matric_no = '$voter'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find voter with the Matric No';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){


				$from = "emmyconceptng@gmail.com";
				$to = $row['email'];
				$subject = "One Time Pin";
				$message = $row['voters_id'];
				$headers = "From:" . $from;
				mail($to,$subject,$message, $headers);


				$_SESSION['voter'] = $row['id'];
				$_SESSION['success'] = 'Welcome! Enter voter ID sent to your email';
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input voter credentials first';
	}

	header('location: voteridform.php');

?>