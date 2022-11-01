<?php
session_start();
include '../online-quiz/database/config.php';
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];

    if($password1 !== $password2){
        $_SESSION['error'] = "Password Doesn't Match";
    }

    $sql = "SELECT * FROM users WHERE email = '$email' OR username = '$name'";
    $query = $conn->query($sql);

    if($query->num_rows > 1){
        $_SESSION['error'] = "Email or Username Exists";
        header('location: ../login-register.php#undefined2');
    }else{
        $password = password_hash($password1, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password')";
        $query = $conn->query($sql);

        header('location: ../index.php');
    }
    
    
}


if(isset($_POST['signin'])){
    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE email = '$username' OR username = '$name'";
    $query = $conn->query($sql);

    if($query->num_rows < 1){
        $_SESSION['error'] = 'Cannot find account with the username' ;
    } else{
        $row=$query->fetch_assoc();

        if(password_verify($password, $row['password'])){
        if($row['role'] == 'admin'){
        $_SESSION['admin'] = $row['user_id'];
        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['admin_type'] = $row['role'];
        header('location: ../admin');
        }elseif ($row['role'] == 'executive') {
        $_SESSION['executive'] = $row['user_id'];
        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['admin_type'] = $row['role'];
        header('location: ../admin');
        }elseif ($row['role'] == 'imsec') {
        $_SESSION['imsec'] = $row['user_id'];
        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['admin_type'] = $row['role'];
        header('location: ../admin');
        }elseif ($row['role'] == 'student') {
        $_SESSION['student'] = $row['user_id'];
        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['admin_type'] = $row['role'];
        header('location: ../index.php');
        }
        }
        else{
        $_SESSION['error'] = 'Incorrect password';
        header('location: ../login-register.php');
        }
        }

        }

        //header('location: ../login-register.php');
?>