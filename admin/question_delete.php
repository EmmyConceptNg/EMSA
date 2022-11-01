<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM questions WHERE questionid = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Question deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	if(isset($_GET['quizid'])){
        $quizid = $_GET['quizid'];
        header('location: questions.php?quizid='.$quizid);
    }else{
        header('location: questions.php');
    }
	
?>