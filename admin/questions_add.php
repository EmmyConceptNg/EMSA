<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
        /* $number = $_POST['total']; */
        $number = 4;
        $id=$_POST['id'];
        $ch=4;

        for($i=1;$i<=$number;$i++) {
            $question=$_POST['question'.$i];
            $qid = uniqid();
            $sql = "INSERT INTO questions VALUES ('','$qid','$id','$question', '')";
            $conn->query($sql);

            $oaid=uniqid();
            $obid=uniqid();
            $ocid=uniqid();
            $odid=uniqid();

            $a=$_POST[$i.'1'];
            $b=$_POST[$i.'2'];
            $c=$_POST[$i.'3'];
            $d=$_POST[$i.'4'];
            
            $qa=mysqli_query($conn,"INSERT INTO options VALUES ('', '$oaid', '$qid', '$a')") or die('Error61');
            $qb=mysqli_query($conn,"INSERT INTO options VALUES ('', '$obid', '$qid', '$b')") or die('Error62');
            $qc=mysqli_query($conn,"INSERT INTO options VALUES ('', '$ocid', '$qid', '$c')") or die('Error63');
            $qd=mysqli_query($conn,"INSERT INTO options VALUES ('', '$odid', '$qid', '$d')") or die('Error64');
            $e=$_POST['answer'.$i];
            switch($e) { 
                case 'a' : $ansid=$oaid;
                break;
                case 'b' : $ansid=$obid;
                break;
                case 'c' : $ansid=$ocid;
                break;
                case 'd' : $ansid=$odid;
                break;
                default: $ansid=$oaid;
            }
            $qans=mysqli_query($conn,"INSERT INTO answer VALUES ('$qid','$ansid')"); } header("location:quiz.php?q=0"); 
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: questions.php'); 
?>