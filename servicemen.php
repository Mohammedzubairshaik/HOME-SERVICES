<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "company";
	$name=0;
	$uname=0;
	$mail=0;
	$type_of_service=0;
	$message=0;
	$conn = mysqli_connect($servername,$username,$password);
	//mysql_query("create database WEB");
	mysqli_select_db($conn,$database);
	//mysql_query("create table users(email varchar(30),pass varchar(10)");
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name=$_POST['Name'];
	$uname=$_POST['Name1'];
	$mail=$_POST['Email'];
	$type_of_service=$_POST['service'];
	$message=$_POST['Message'];
	}
	$res=mysqli_query($conn,"INSERT INTO servicemen VALUES('$name','$uname','$mail','$type_of_service','$message')") or die(mysql_error());
	header('location:page1.html');
?>