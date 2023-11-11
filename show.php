<html>
<title>Home services</title>
<head>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript">
function Finalconf()
{
	if(confirm("Click on OK for the Final Confirmation                                                   Thank you for visiting Our website"))
	window.location="page1.html";
}
</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="login.html">Log Out</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Feedback</a></li>
          <li><a href="terms&conditions.html">Terms & conditions</a></li>
          <li><a href="page1.html">Home</a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="logo">
	 <div style="position:absolute;left:435px;top: 90px;">
		<a href="page1.html">
		<img src="images/logo1.png" height="50" width="80"></a></div>
		  <h1><font color="white">HOME SERVICES</font></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/06.jpg" width="960" height="360"/> </a> <a href="#"><img src="images/5.jpg" width="960" height="360" alt="" /> </a> <a href="#"><img src="images/service-times.jpg" width="960" height="360" alt=""/> </a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "company";
$ids=0;
$conn = mysqli_connect($servername,$username,$password);
mysqli_select_db($conn,$database);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$ids=$_POST['radio'];
}
//echo "$ids";	
if(isset($_POST['submit']))
/*if(isset($_POST['radio']) and !empty($_POST['radio']))
{  
echo "The service men would be providing service on 22nd April ";//.$_POST['radio'];          
         
}*/?>
<h3 align="center">The selected service men would be providing service on 
<?php

//Generate a random year using mt_rand.
$year= mt_rand(2019, date("Y"));

//Generate a random month.
$month= mt_rand(4, 12);

//Generate a random day.
$day= mt_rand(1, 28);

//Using the Y-M-D format.
$randomDate = $day . "-" . $month . "-" . $year;

//Echo.
echo $randomDate;
?></h3>
<br>
<br>
<table border="2" align="center">
<tr>
	<th>Servcemen </th>
	<th>ID</th>
	<th>Designation</th>
	<th>Phone no</th>
</tr>
<?php
	$records=mysqli_query($conn,"select * from availability where sid=$ids") or die(mysql_error());
  while($rows=mysqli_fetch_row($records))
  {
	echo "<tr><td>$rows[0]</td>";
	echo  "<td>$rows[1]</td>";
	echo  "<td>$rows[2]</td>";
	echo  "<td>$rows[3]</td>";
	echo  "</tr>";
  }
  ?>
 
</table><br/><br/><br/>
 <div class="clr"></div>
 <div style="position:absolute;left:750px;top: 720px;">
  <input type="submit" value="submit" name="submit" onClick="Finalconf()"></div>
        <div class="gadget">
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
      </div>
       <div class="clr"></div>
        <div class="gadget">
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
     <div class="col c3">
          <h2>Contact Us</h2>
        <p class="contact_info">Address: 1458 White field,Banglore-560 066<br/>
          Telephone: +123-1234-5498<br/>
          FAX: +458-4578<br/>
          E-mail: <a href="#">homeservices@gmail.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>