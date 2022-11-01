<?php
	session_start();
	include 'includes/conn.php';

	$from = "kolawoleemmanuel13@students.unilorin.edu.ng";
	$to = "emmyconceptng@gmail.com";
	$subject = "Checking PHP mail";
	$message = "PHP mail works just fine";
	$headers = "From:" . $from;
	if(mail($to,$subject,$message, $headers)) {
	echo "The email message was sent.";
	} else {
	echo "The email message was not sent.";
	}

?>