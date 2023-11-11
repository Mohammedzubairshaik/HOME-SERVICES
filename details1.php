<html>
<title>Home services</title>
<head>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" src="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript">
function conf()
{
	if(confirm("     Your service has been confirmed                                                        Please give the feedback after service"))
	window.location="page1.html";
	onclick="sendmail.php";
}
function AlertIt() 
{
if(confirm ("Please click on OK to continue."))
	window.location="page1.html";
}
</script>
<style>
table 
{
  width:75%;
}
table, th, td
{
  border: 1px solid black;
  border-collapse: collapse;
}
th, td 
{
  padding: 5px;
  text-align: left;
}
table#t01 tr:nth-child(even) 
{
  background-color: #eee;
}
table#t01 tr:nth-child(odd) 
{
 background-color: #fff;
}
table#t01 th 
{
  background-color: black;
  color: white;
}
</style></head>
<body>
<form action="show.php" method="post">
<table id="t01" align="center" >
  <tr>
    <th>Name</th>
    <th>SID</th> 
	<th>Designation</th>
    <th>Availability</th>
    <th>Select</th>
  </tr>
  <?php
 
	$mailid=$_POST['Email'];
 echo $mailid;
 //file_put_contents($mailid,"mail.txt");
 file_put_contents("mail.txt",$mailid);
 mysql_connect("localhost","root","");
	//mysql_query("create database WEB");
	mysql_select_db("COMPANY");
	/*mysql_query("create table users(email varchar(30),pass varchar(10)");
	$name=$_POST['Name'];
	$uname=$_POST['Name1'];
	$mail=$_POST['Email'];
	$type_of_service=$_POST['service'];
	$message=$_POST['Message'];
	mysql_query("INSERT INTO servicemen VALUES('$name','$uname','$mail','$type_of_service','$message')") or die(mysql_error());
	header('location:page1.html');*/
	$records=mysql_query("select * from availability") or die(mysql_error());
	

  while($rows=mysql_fetch_row($records))
  {
	echo "<tr><td>$rows[0]</td>";
	echo  "<td>$rows[1]</td>";
	echo  "<td>$rows[2]</td>";
	echo  "<td>$rows[3]</td>";
	echo "<td><input type=radio name=radio value=$rows[1]></td></tr>";
  }
  ?>
  
  <?php	
	//vars
	$subject ="Confirmation of Service";
	$from = "mohammedzubair25g4@gmail.com";
	$to = $_POST['Email'];
/*	data
	$msg = "Name: "  .$_POST['Name']    ."<br>\n";
	$msg .= "Email Address: "  .$_POST['Email']    ."<br>\n";
	$msg .= "Permanent Adress: " .$_POST['Address']  ."<br>\n";
	$msg .= "Organisation: "  .$_POST['website']    ."<br>\n";
	$msg .= "Contact Number: "  .$_POST['phone']    ."<br>\n";
	$msg .= "Description: "  .$_POST['message']    ."<br>\n";
	$msg .= "Enter type of service: " .$_POST['service']  ."<br>\n"; 

	Headers */
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: <".$from. ">" ;


	//send for each mail

	/*mail($to, $subject, $msg, $headers);
	header( 'Location: availability.html' ) ;*/
 ?>
 <!-- <script>
window.history.go(-1);
 </script> -->
	<div style="position:absolute;left:750px;top: 1435px;">
  <input type="submit" value="submit" name="submit" onClick="conf()"></div>
</form></body></html>