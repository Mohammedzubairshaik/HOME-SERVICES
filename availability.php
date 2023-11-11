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
</style>
<script type="text/javascript">
function conf()
{
	if(confirm("Your service has been confirmed"))
	window.location="page1.html";
	onclick="sendmail.php";
}
function AlertIt() 
{
if(confirm ("Please click on OK to continue."))
	window.location="page1.html";
}
function showHide() 
{
  
 if (style.visibility == 0) 
	style.visibility = "visible"; 
 else 
	style.visibility = ""; 
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
          <li><a href="about.html">About us</a></li>
          <li><a href="contact.html">Feedback</a></li>
          <li><a href="terms&conditions.html">Terms & conditions</a></li>
          <li><a href="page1.html">Home</a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="logo">
		  <h1><font color="white">HOME SERVICES</font></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/06.jpg" width="960" height="360"/> </a> <a href="#"><img src="images/5.jpg" width="960" height="360" alt="" /> </a> <a href="#"><img src="images/service-times.jpg" width="960" height="360" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
    <table id="t01" align="center">
  <tr>
    <th>Name</th>
    <th>SID</th> 
	<th>Designation</th>
    <th>Availability</th>
    <th>Select</th>
  </tr>
  <tr>
    <td>John</td>
    <td>001</td>
	<td>Plumber</th>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr>
  <tr>
    <td>Smith</td>
    <td>002</td>
	<td>Plumber</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr>
  <tr>
    <td>Roshan</td>
    <td>003</td>
	<td>Plumber</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr>
  <tr>
    <td>Rohit</td>
    <td>004</td>
	<td>Plumber</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Shabaz</td>
    <td>005</td>
	<td>Painter</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Arbaz</td>
    <td>006</td>
	<td>Painter</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Rohit</td>
    <td>007</td>
	<td>Painter</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Salman</td>
    <td>008</td>
	<td>Painter</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Ritvik</td>
    <td>009</td>
	<td>Cleaner</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Karthik</td>
    <td>010</td>
	<td>Cleaner</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Kiran</td>
    <td>011</td>
	<td>Cleaner</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Pawan</td>
    <td>012</td>
	<td>Cleaner</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Mohisin</td>
    <td>013</td>
	<td>Electrician</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Samarth</td>
    <td>014</td>
	<td>Electrician</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Shoeb</td>
    <td>015</td>
	<td>Electrician</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Nisar</td>
    <td>016</td>
	<td>Electrician</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Ramesh</td>
    <td>017</td>
	<td>Laundryman</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Ajay</td>
    <td>018</td>
	<td>Laundryman</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Ajith</td>
    <td>019</td>
	<td>Laundryman</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Ankith</td>
    <td>020</td>
	<td>Laundryman</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Arman</td>
    <td>021</td>
	<td>Electronic Technician</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Murgesh</td>
    <td>022</td>
	<td>Electronic Technician</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Maresh</td>
    <td>023</td>
	<td>Electronic Technician</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Mohith</td>
    <td>024</td>
	<td>Electronic Technician</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Samarth .S</td>
    <td>025</td>
	<td>Carpenter</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Sharukh</td>
    <td>026</td>
	<td>Carpenter</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Adithitya</td>
    <td>027</td>
	<td>Carpenter</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr> 
    <td>Kishor</td>
    <td>028</td>
	<td>Carpenter</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Kumar</td>
    <td>029</td>
	<td>Pool Technician</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Karthik.A</td>
    <td>030</td>
	<td>Pool Technician</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Kaushik</td>
    <td>031</td>
	<td>Pool Technician</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Kishan</td>
    <td>032</td>
	<td>Pool Technician</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Kiran.Y</td>
    <td>033</td>
	<td>Greenskeeper</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Keerthan</td>
    <td>034</td>
	<td>Greenskeeper</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Furkan</td>
    <td>035</td>
	<td>Greenskeeper</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Fikshan</td>
    <td>036</td>
	<td>Greenskeeper</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Rohan</td>
    <td>037</td>
	<td>Packer and Unpacker</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Sarmas</td>
    <td>038</td>
	<td>Packer and Unpacker</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Nazir</td>
    <td>039</td>
	<td>Packer and Unpacker</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr>
  <tr>
    <td>Kotresh</td>
    <td>040</td>
	<td>Packer and Unpacker</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Ajith</td>
    <td>041</td>
	<td>Event manager</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Amith</td>
    <td>042</td>
	<td>Event manager</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Aawez</td>
    <td>043</td>
	<td>Event manager</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Arman.K</td>
    <td>044</td>
	<td>Event manager</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr><tr>
    <td>Akbar</td>
    <td>045</td>
	<td>Party organizer</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr>
  <tr>
    <td>Asad</td>
    <td>046</td>
	<td>Party organizer</td>
    <td>Yes</td>
    <td><input type="checkbox" id="select"/></td>
  </tr>
  <tr>
    <td>Arohith</td>
    <td>047</td>
	<td>Party organizer</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr>
  <tr>
    <td>Arjith</td>
    <td>048</td>
	<td>Party organizer</td>
    <td>No</td>
    <td><input type="checkbox" id="select"/></td>
  </tr>
</table>
    <br/><br/>
<div style="position:absolute;left:750px;top: 2025px;">
<form action="sendmail.php" method="POST">
<input type="button" name="Confirm" value="Confirm" onclick="conf()">to get the service.</div></form>
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
</body>
</html>
