<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "company";
	$email=0;
	$pas=0;
	$conn = mysqli_connect($servername,$username,$password);
	mysqli_select_db($conn,$database);
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email=$_POST['email'];
	$pas=$_POST['pass'];}
	$res=mysqli_query($conn,"select email,pass from customer where email='$email'") OR DIE(MYSQL_ERROR());
	$row=mysqli_fetch_row($res);
	$pwd=$row[1];
	if(strcmp($pas,$pwd)==0)
		header('location:page1.html');
	else
	header('location:login.html');
	
?>
