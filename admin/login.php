<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = $_POST['password'];

		$sql = "SELECT * FROM users WHERE email = '$username' OR username = '$username'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the username';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['login'] = true;
				$_SESSION['user'] = $row['role'];
				
				$user = $row;
				$_SESSION['first_name'] = $row['first_name'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['last_name'] = $row['last_name'];
				$_SESSION['role'] = $row['role'];
				$_SESSION['gender'] = $row['gender'];
				$_SESSION['dob'] = $row['dob'];
				$_SESSION['address'] = $row['address'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['phone'] = $row['phone'];
				$_SESSION['department'] = $row['department'];
				$_SESSION['avatar'] = $row['avatar'];
				$_SESSION['myid'] = $row['user_id'];
				$_SESSION['mycategory'] = $row['category'];
				$accstat = $row['acc_stat'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['user'] = $row['role'];
				echo 1;
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
				echo 2;
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}

	if($_SESSION['user'] == 'student'){
		header('location: ../index.php');
	}else{
		header('location: index.php');
	}

?>