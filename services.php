<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "company";
	$name=0;
	$mail=0;
	$add=0;
	$type_of_service=0;
	$conn = mysqli_connect($servername,$username,$password);
	//mysql_query("create database WEB");
	mysqli_select_db($conn,$database);
	//mysql_query("create table users(email varchar(30),pass varchar(10)");
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name=$_POST['Name'];
	$mail=$_POST['Email'];
	$add=$_POST['Address'];
	$type_of_service=$_POST['service'];
	}
	$res=mysqli_query($conn,"INSERT INTO services VALUES('$name','$mail','$add','$type_of_service')") or die(mysql_error());
	header('location:details.php');
?>