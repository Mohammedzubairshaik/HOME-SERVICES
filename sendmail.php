<?php
//vars
$subject ="Confirmation of Service";
$from = "mohammedzubair25g4@gmail.com";

$to = $_POST['Email'];

//data
$msg = "Name: "  .$_POST['Name']    ."<br>\n";
$msg .= "Email Address: "  .$_POST['Email']    ."<br>\n";
$msg .= "Permanent Adress: " .$_POST['Address']  ."<br>\n";
//$msg .= "Organisation: "  .$_POST['website']    ."<br>\n";
$msg .= "Contact Number: "  .$_POST['phone']    ."<br>\n";
//$msg .= "Description: "  .$_POST['message']    ."<br>\n";
$msg .= "Enter type of service: " .$_POST['service']  ."<br>\n"; 

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;


//send for each mail

mail($to, $subject, $msg, $headers);
header( 'Location: availability.html' ) ;
 ?>
 <!-- <script>
window.history.go(-1);
 </script> -->