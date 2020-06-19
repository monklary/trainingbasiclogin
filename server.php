<?php

session_start();
$username ="";
$password="";

$errors = array();

$db = mysqli_connect('localhost','root','','training');

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

if($password_1 != $password_2)(array_push($errors, "password salah"));
$user_check_query = "SELECT * FROM user WHERE username= '$username'or email='$email' LIMIT 1";
$result = mysql_query($db, $user_check);
$user = mysql_assoc($result);
if($user['email']=== $email){array_push($errors, "email ini sudah digunakan");

if(count($errors) == 0){
    $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Welcome";

    header('location: regist.php');
}?>