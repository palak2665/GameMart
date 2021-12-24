<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo"connection succesfull";
}else{
    echo"connection succesfull";
}

mysqli_select_db($con, 'sessionpractical');


$fullname = $_POST['firstname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cardname = $_POST['cardname'];
$ccnumber = $_POST['cardnumber'];
$expm = $_POST['expmonth'];
$expy = $_POST['expyear'];
$cvv = $_POST['cvv'];


$qy = "insert into payment(fullname,email,address,city,state,zip,cardname,ccnumber,expm,expy,cvv) values('$fullname','$email','$address','$city','$state','$zip','$cardname','$ccnumber','$expm','$expy','$cvv')";
mysqli_query($con,$qy);
header("Location:index.php?message2=<div class='alert alert-success'>Order has been successfully placed.</div>");
// echo $qy;



?>