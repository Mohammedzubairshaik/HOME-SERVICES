<?php 
	mysql_connect("localhost","root","");
	//mysql_query("create database WEB");
	mysql_select_db("COMPANY");
	//mysql_query("create table users(email varchar(30),pass varchar(10)");
	$name=$_POST['Name'];
	$mail=$_POST['Email'];
	$add=$_POST['Address'];
	$type_of_service=$_POST['service'];
	mysql_query("INSERT INTO services VALUES('$name','$mail','$add','$type_of_service')") or die(mysql_error());
	header('location:availability1.html');
?>