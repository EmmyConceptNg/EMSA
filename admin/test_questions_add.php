<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$subject_id = mysqli_real_escape_string($conn, $_POST['test_question_course']);
		$question = mysqli_real_escape_string($conn, $_POST['test_question']);
		$answer1 = mysqli_real_escape_string($conn, $_POST['test_answer_1']);
		$answer2 = mysqli_real_escape_string($conn, $_POST['test_answer_2']);
		$answer3 = mysqli_real_escape_string($conn, $_POST['test_answer_3']);
		$answer4 = mysqli_real_escape_string($conn, $_POST['test_answer_4']);
		$answer_id = mysqli_real_escape_string($conn, $_POST['test_question_answer']);

		
		$sql = "INSERT INTO test_questions (subject_id, question, answer1, answer2, answer3, answer4, answer_id) VALUES
		('$subject_id', '$question', '$answer1', '$answer2', '$answer3', '$answer4', '$answer_id')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Question added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: test_questions.php');
?>