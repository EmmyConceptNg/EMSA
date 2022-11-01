<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$subject_id = mysqli_real_escape_string($conn, $_POST['test_question_course']);
		$question = mysqli_real_escape_string($conn, $_POST['test_question']);
		$answer1 = mysqli_real_escape_string($conn, $_POST['test_answer_1']);
		$answer2 = mysqli_real_escape_string($conn, $_POST['test_answer_2']);
		$answer3 = mysqli_real_escape_string($conn, $_POST['test_answer_3']);
		$answer4 = mysqli_real_escape_string($conn, $_POST['test_answer_4']);
		$answer_id = mysqli_real_escape_string($conn, $_POST['test_question_answer']);

		$sql = "UPDATE test_questions SET subject_id = '$subject_id', question = '$question', answer1 = '$answer1', answer2
		= '$answer2', answer3 = '$answer3', answer4 = '$answer4', answer_id = '$answer_id' WHERE id
		= '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Question updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: test_questions.php');

?>