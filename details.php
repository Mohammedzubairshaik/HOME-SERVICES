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
<h2 align="center">Please Select the Servicemen to fullfill your service</h2>
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
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "company";
	$conn = mysqli_connect($servername,$username,$password);
	mysqli_select_db($conn,$database);
	
	$records=mysqli_query($conn,"select * from availability") or die(mysql_error());
	

  while($rows=mysqli_fetch_row($records))
  {
	echo "<tr><td>$rows[0]</td>";
	echo  "<td>$rows[1]</td>";
	echo  "<td>$rows[2]</td>";
	echo  "<td>$rows[3]</td>";
	echo "<td><input type=radio name=radio value=$rows[1]></td></tr>";
  }
  ?></table><br/><br/>
	<div style="position:absolute;left:750px;top: 2045px;">
  <input type="submit" value="submit" name="submit" onClick="conf()"></div>
</form>
<div class="clr"></div>
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