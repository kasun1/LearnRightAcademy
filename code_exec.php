<?php
session_start();
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$course_name=$_POST['course_name'];
$username=$_POST['username'];
$email=$_POST['email'];
mysql_query("INSERT INTO member(fname, lname, gender, address, contact, course_name, username, email)VALUES('$fname', '$lname', '$gender', '$address', '$contact', '$course_name', '$username', '$email')");
header("location: Registration.php?remarks=success");
mysql_close($con);
?>