<?php
include '../../includes/conn.php';
$depid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "UPDATE tbl_departments SET status='Inactive' WHERE department_id='$depid'";

if ($conn->query($sql) === TRUE) {
    header("location:../departments.php?rp=7823");
} else {
    header("location:../departments.php?rp=1298");
}

$conn->close();
?>
