<html>
<head>
<title>search for personal record</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<h2 id="para1">INDIAN INSTITUTE OF TECHNOLOGY, MANDI</h2><hr width="1000"/>
<h3>Welcome to unique id project</h3>

<i><h2 id="north"><blink>WELCOME TO NORTH ZONE</blink></h2></i>
<center><MARQUEE DIRECTION="LEFT" BGCOLOR=FFFF99 INFINITE WIDTH="800" >ENTER UNIQUE ID TO GET PERSONAL INFORMATION</MARQUEE></center>
<br/>
<?php
//connect to database
require_once('connect_db.php');
//check for form submission
if(isset($_POST['submit']))
{
	
	$unique_id=$_POST['search'];
	if(!empty($unique_id))
	{
		//connect to mysql server
		$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		if(!$con)
		{
			die('could not connect' . mysql_error());
		}
		//connect to database
		mysql_select_db(DB_NAME,$con);
		
		$name1='server 1';
		$name2='server 2';
		$name3='server 3';
		$name4='server 4';
		$query1=mysql_query("select * from server_name where name= '$name1' ");
		$query2=mysql_query("select * from server_name where name= '$name2' ");
		$query3=mysql_query("select * from server_name where name= '$name3' ");
		$query4=mysql_query("select * from server_name where name= '$name4' ");
		$row1=mysql_fetch_array($query1);
		$row2=mysql_fetch_array($query2);
		$row3=mysql_fetch_array($query3);
		$row4=mysql_fetch_array($query4);
				
		/*$server1='server 1';
		$server2='server 2';
		$server3='server 3';
		$server4='server 4';
		$server_details1=mysql_query("select * from server_name where name='$server1' ");
		$row1=mysql_fetch_array($server_details1);
		$server_details2=mysql_query("select * from server_name where name='$server2' ");
		$row2=mysql_fetch_array($server_details2);
		$server_details3=mysql_query("select * from server_name where name='$server3' ");
		$row3=mysql_fetch_array($server_details3);
		$server_details4=mysql_query("select * from server_name where name='$server4' ");
		$row4=mysql_fetch_array($server_details4);*/
		if((($unique_id <= $row1['lastrange1'])&&($unique_id > $row1['startrange1']))||(($unique_id <= $row1['lastrange2'])&&($unique_id > $row1['startrange2']))||(($unique_id <= $row1['lastrange3'])&&($unique_id > $row1['startrange3']))||(($unique_id <= $row1['lastrange4'])&&($unique_id > $row1['startrange4'])))
		
		
		//if($unique_id < $row2['datarange'] &&(($unique_id > $row1['datarange'])|| ($unique_id = $row1['datarange'])))
		{
			//process the query
			$result=mysql_query("select a.Fname,a.Minit,a.Lname,a.Sex,a.Date_of_birth,a.email,b.unique_id,b.Father_name,b.Mother_name
			,b.Occupation,b.Permanent_address,b.padd_city,b.padd_state,b.padd_pin,b.phone_no from personal_info a,address_info b where a.Unique_id=b.Unique_id and a.Unique_id= '$unique_id' ");
			
			while($row = mysql_fetch_array($result))
			{
				
				echo "<b>Name </b>:" . $row['Fname'] . " " . $row['Minit'] . " " . $row['Lname'] . "<br/>";
				echo "<b>Unique ID</b> :" . $row['unique_id'] . "<br/>";
				echo "<b>Sex</b> :" . $row['Sex'] . "<br/>";
				echo "<b>Date of birth</b> :" . $row['Date_of_birth'] . "<br/>";
				echo "<b>married status</b> :" . $row['married_status'] . "<br/>";
				echo "<b>Email Id</b> :" . $row['email'] . "<br/>";
				echo "<b>Father's Name</b> :" . $row['Father_name'] . "<br/>";
				echo "<b>Mother's Name</b> :" . $row['Mother_name'] . "<br/>";
				echo "<b>Occupation</b> :" . $row['Occupation'] . "<br/>";
				echo "<b>Phone Number</b> :" . $row['phone_no'] . "<br/>";
				
				echo "<i>permanent address :</i><br/>";
				echo "<b>address</b> :" . $row['Permanent_address'] . "<br/>";
				echo "<b>city</b> :" . $row['padd_city'] . "<br/>";
				echo "<b>state</b> :" . $row['padd_state'] . "<br/>";
				echo "<b>pin</b> :" . $row['padd_pin'] . "<br/>";
				
			}
		}
		/*elseif($unique_id < $row3['datarange'] && (($unique_id > $row2['datarange'])||($unique_id = $row2['datarange'])))
		{
			echo '<a href="http://' . $row2['ipaddr'] . '/uniqueid_modern/search2.php ">go to this server2</a>';
		}
		*/
		else if((($unique_id <= $row2['lastrange1'])&&($unique_id > $row2['startrange1']))||(($unique_id <= $row2['lastrange2'])&&($unique_id > $row2['startrange2']))||(($unique_id <= $row2['lastrange3'])&&($unique_id > $row2['startrange3']))||(($unique_id <= $row2['lastrange4'])&&($unique_id > $row2['startrange4'])))
		//elseif($unique_id < $row3['datarange'] && (($unique_id > $row2['datarange'])||($unique_id = $row2['datarange'])))
		{
			//echo '<a href="http://' . $row2['ipaddr'] . '/uniqueid_modern/search2.php ">go to this server2</a>';
			
			$home_url = 'http://' . $row2['ipaddr'] .  '/unique_id/south_zone.php';
          header('Location: ' . $home_url);
			
		}
		
		else if((($unique_id <= $row3['lastrange1'])&&($unique_id > $row3['startrange1']))||(($unique_id <= $row3['lastrange2'])&&($unique_id > $row3['startrange2']))||(($unique_id <= $row3['lastrange3'])&&($unique_id > $row3['startrange3']))||(($unique_id <= $row3['lastrange4'])&&($unique_id > $row3['startrange4'])))
		
		//else if($unique_id < $row4['datarange'] && (($unique_id > $row3['datarange'])||($unique_id = $row3['datarange'])))
		{
			//echo '<a href="http://' . $row3['ipaddr'] . '/uniqueid_modern/search3.php ">go to this server3</a>';
		$home_url = 'http://' . $row3['ipaddr'] .  '/unique_id/east_zone.php';
          header('Location: ' . $home_url);
		
		}
		else
		{
			//echo '<a href=http://' . $row4['ipaddr'] . '/uniqueid_modern/search4.php ">go to this server4</a>';
		
		$home_url = 'http://' . $row4['ipaddr'] .  '/unique_id/west_zone.php';
          header('Location: ' . $home_url);
		}
	}


else
{
	echo '<p style="color:red">please enter your unique ID</p>';
}
	

}
?>		
<br/>
<i>Search people across india by intering unique id number</i><br/>
<form method="post" name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<br/><label for="search"><p>Enter UniqueID</label>
<input type="text" name="search" id="search"></p>
<br/>
<br/>
<input type="submit" id="submit" name="submit" value="get personal information">
</form>
</body>

</html>
