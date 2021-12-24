<?php

session_start();
header('location:signin.php');

$con = mysqli_connect('localhost','root');
if($con){
    echo"connection succesfull";
}else{
    echo"connection succesfull";
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['username'];
$pass = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
    // echo"duplicate data";
    // header('location:signup.php');
    header("Location:signup.php?message=<div class='alert alert-danger'>username already exist.</div>");
}else{
    $qy = "insert into signin(name,password) values('$name','$pass')";
    mysqli_query($con,$qy);
}

?>