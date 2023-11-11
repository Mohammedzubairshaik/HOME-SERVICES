<HTML>
<head>
<?php 
          //$sem=$_POST['semesters'];
          //$sub=$_POST['subjects'];
          //$select=$_POST['select'];
$mysql = mysql_connect("localhost","root","") or die("could not connect to mysql"); 
mysql_select_db("company") or die("DB DOESN'T SELECTED");

?>
<html> 
<head> 
<title>Home Services</title> 
</head> 
<body> 
<BR><BR>			 
<?php 
if($sub!="ALL")
{
$sql="SELECT * FROM eventest WHERE sem=\"$sem\" and sub=\"$sub\"";
$result=mysql_query("$sql"); 
}
else
{
$sql1="SELECT * FROM eventest WHERE sem=\"$sem\" order by reg";
$result=mysql_query("$sql1"); 
$sql2="select * from evenatt1 where sem=\"$sem\"";
$ham=mysql_query("$sql2");
}
?>
</b> 
<br>
<table border=2 align="LEFT">	
<table border=2 align="left"><font color="pink">
			<?php
			$select=$_POST['selected'];
               if($selected=="internal")
			   {  
				$array = mysql_fetch_row($result);
					echo "<tr>";
					echo "<TD>SID</TD><td>$array[2]</td></TR>";
					echo "<TD>Name</TD><td>$array[3]</td></TR>";
					echo "<TD>Designation</TD><td>$array[4]</td></tr><tr>";
					echo "<TD>Phone No.</TD><td>$array[4]</td>";
					
					echo "</tr>";
					echo "<tr><tH>REGNo</tH><tH>NAME</tH><TH>TEST1</TH><TH>TEST2</TH><TH>TEST3(R)</TH><TH>TOTAL</TH></tr>";
                    $res=mysql_query("$sql");
				    while ($array = mysql_fetch_row($res)) 
				     {   
				      $t[0]=$array[6];
					  $t[1]=$array[7];
					  $t[2]=$array[8];
					for($i=0;$i<3;$i++)
					{ 
					  for($j=0;$j<2;$j++)
					  {
					    if($t[$j]>=$t[$j+1])
						 {
						   $temp=$t[$j];
						   $t[$j]=$t[$j+1];
						   $t[$j+1]=$temp;
						  }
					  }  
					}	  
                     $avg=$t[1]+$t[2];						  
					
				if($avg>=10)
                 {					
					echo "<tr>";
					echo "<td>$array[0]</td>";
					echo "<td>$array[1]</td>";
					echo "<td>$array[6]</td>";
					echo "<td>$array[7]</td>";
					echo "<td>$array[8]</td>";
					echo "<td>$avg</td>";
					echo "</tr>";
				 }	
				 else
				 {
				    echo "<tr bgcolor=red>";
					echo "<td>$array[0]</td>";
					echo "<td>$array[1]</td>";
					echo "<td>$array[6]</td>";
					echo "<td>$array[7]</td>";
					echo "<td>$array[8]</td>";
					echo "<td>$avg</td>";
					echo "</tr>";
				 }
				} 
				}
				if($option=="attendance")
				{
				   $sql2="select regno,name,sem,sub,staff,ctaken,jan,feb,mar,april,(jan+feb+mar+april) \"presented\",(jan+feb+mar+april)*100/ctaken  \"attavg\" from evenatt1 where sem=\"$sem\" AND sub=\"$sub\"";
                                                                                $ham=mysql_query("$sql2");
				   $array = mysql_fetch_row($ham);
				   	echo "<tr>";
					echo "<TD>SEM</TD><td>$array[2]</td></TR>";
					echo "<TD>SUB</TD><td>$array[3]</td></TR>";
					echo "<TD>STAFF</TD><td>$array[4]</td></tr><tr>";
					echo "<TD>TOTAL CLASS TAKEN</TD><td>$array[5]</td></tr><tr>";
					echo "</tr>";
					echo "<tr><tH>REGNO</tH><tH>NAME</tH><TH>JAN</TH><TH>FEB</TH><TH>MAR</TH><TH>APRIL</TH><TH>PRESENTED</TH><TH>ATTAVG</TH><th>MARKS</th></tr>";
                    $ham=mysql_query("$sql2");
				    while ($array = mysql_fetch_row($ham)) 
				     {   
				      $at[0]=$array[5];
					  $at[1]=$array[6];
					  $at[2]=$array[7];
					  $at[3]=$array[8];
					  $at[4]=$array[9];
					for($i=0;$i<4;$i++)
					{ 
					  for($j=0;$j<3;$j++)
					  {
					    if($at[$j]>=$at[$j+1])
						 {
						   $temp=$at[$j];
						   $at[$j]=$at[$j+1];
						   $at[$j+1]=$temp;
						  }
					  }  
					}	  
                     //$avg=$at[1]+$at[2]+$at[3]+$at[4])/4;						  
					
				if($array[11]>75)
                 {					
					echo "<tr>";
					echo "<td>$array[0]</td>";
					echo "<td>$array[1]</td>";
					echo "<td>$array[6]</td>";
					echo "<td>$array[7]</td>";
					echo "<td>$array[8]</td>";
					echo "<td>$array[9]</td>";
					echo "<td>$array[10]</td>";
					echo "<td>$array[11]</td>";
					echo "</tr>";
				 }	
				 else
				 {
				    echo "<tr bgcolor=red>";
					echo "<td>$array[0]</td>";
					echo "<td>$array[1]</td>";
					echo "<td>$array[6]</td>";
					echo "<td>$array[7]</td>";
					echo "<td>$array[8]</td>";
					echo "<td>$array[9]</td>";
					echo "<td>$array[10]</td>";
					echo "<td>$array[11]</td>";
					echo "</tr>";
				 }
				} 
			}	
				
				if($option=="final")
				{
				   $sql3="select eventest.name,reg,eventest.sem,eventest.staff,eventest.sub,ctaken,(jan+feb+mar+april) \"april\",(jan+feb+mar+april)*100/ctaken \"average\",attmarks,t1,attmarks+t1 \"ceil(ttlmarks)\" from eventest,evenatt1 where eventest.reg=evenatt1.regno and eventest.sub=\"$sub\"";
				   $am=mysql_query("$sql3") OR DIE("HEY U HAVE AN ERROR IN QUERY");

				   
				   $array = mysql_fetch_row($am);
				    
				  	echo "<tr>";
					echo "<TD>SEM</TD><td>$array[2]</td></TR>";
					echo "<TD>SUB</TD><td>$array[4]</td></TR>";
					echo "<TD>STAFF</TD><td>$array[3]</td></tr><tr>";
					echo "<TD>CLASSES TAKEN</TD><td>$array[5]</td></tr><tr>";
					echo "</tr>";		
					echo "<tr><tH>NAME</tH><tH>REGNO</tH><TH>PRESENT</TH><TH>PERCENTAGE</TH><TH>MARKS</TH><TH>TEST MARKS</TH><TH>TOTAL MARKS</TH></tr>";
                    $am=mysql_query("$sql3");
				    $test=mysql_query("select t1,t2,t3 from eventest where sem=$sem and sub=\"$sub\"");
					
					$test=mysql_query("select t1,t2,t3 from eventest where sub=\"$sub\"");

					while ($array = mysql_fetch_row($am) and $res2=mysql_fetch_row($test)) 
				     { 
                      for($i=0;$i<3;$i++)
					{ 
					  for($j=0;$j<2;$j++)
					  {
					    if($res2[$j]>=$res2[$j+1])
						 {
						   $temp=$res2[$j];
						   $res2[$j]=$res2[$j+1];
						   $res2[$j+1]=$temp;
						  }
					  }  
					}	  
                     $avg=$res2[1]+$res2[2];
					 
					
				if(1)
                 {					
					echo "<tr>";
					echo "<td>$array[0]</td>";
					echo "<td>$array[1]</td>";
					echo "<td>$array[6]</td>";
					echo "<td>$array[7]</td>";
					if($array[7]>=96)
					{
					$att=5;
					echo "<td>$att</td>";
					}
					if($array[7]<96 and $array[7]>=86)
					{
					$att=4;
					echo "<td>$att</td>";}
					if($array[7]<86 and $array[7]>=75)
					{
					$att=3;
					echo "<td>$att</td>";
					}
					if($array[7]<75)
					{
					$att=2;
					echo "<td>$att</td>";
					}
					echo "<td>$avg</td>";
					$tm=$avg+$att;
					echo "<td>$tm</td>";
					echo "</tr>";
				 }	
				 else
				 {
				    echo "<tr bgcolor=red>";
					echo "<td>$array[0]</td>";
					echo "<td>$array[1]</td>";
					echo "<td>$array[6]</td>";
					echo "<td>$array[7]</td>";
					echo "<td>$array[8]</td>";
					echo "<td>$avg</td>";
					echo "</tr>";
				 }
				} 
			}	//}
				
mysql_close($mysql); 
?>
