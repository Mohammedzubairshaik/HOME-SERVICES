<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "company";
	$name=0;
	$mail=0;
	$pas=0;
	$phn=0;
	$adn=0;
	$conn = mysqli_connect($servername,$username,$password);
	//mysql_query("create database WEB");
	mysqli_select_db($conn,$database);
	//mysql_query("create table users(email varchar(30),pass varchar(10)");
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name=$_POST['Uname'];
	$mail=$_POST['Email'];
	$pas=$_POST['Pass'];
	$phn=$_POST['Phno'];
	$adn=$_POST['Adno'];
	}
	$query = mysqli_query($conn,"INSERT INTO customer VALUES('$name','$mail','$pas','$phn','$adn')") or die(mysqli_error($conn));
	header('location:login.html');
?>
