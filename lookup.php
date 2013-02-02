<html>
<head>
<title>search personal information</title>
</head>
<body style="background-color:#FFA07A";>
<h3>Welcome to Unique ID system</h3>
<?php
if(isset($_POST['submit']))
{
	$unique_id=$_POST['search'];
	$con=mysql_connect("localhost","root","password");
	if(!$con)
	{
		die('could not connect' . mysql_error());
	}
	mysql_select_db("unique_id_project",$con);

	$result=mysql_query("select a.Fname,a.Minit,a.Lname,a.Sex,a.Date_of_birth,a.married_status,a.email,b.unique_id,b.Father_name,b.Mother_name
	,b.Occupation,b.Permanent_address,b.padd_city,b.padd_state,b.padd_pin,b.current_address,b.current_city,b.current_state,b.current_pin
	,c.phone_no from personal_info a,address_info b,contact_info c where a.Unique_id=b.unique_id and a.Unique_id=c.unique_id and a.Unique_id= '$unique_id' ");

	/*$result="select a.Fname,b.Father_name FROM personal_info a,address_info b WHERE a.Unique_id=b.unique_id and a.Unique_id= '100'  ");*/

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
	echo "<b>address</b> : " . "</br>";
	echo "<b>Phone Number</b> :" . $row['phone_no'] . "<br/><br/>";
	echo '<table border="1">';
	echo '<tr>';
	echo '<td>';
	echo "<b>permanent address</b>";
	echo '</td>';
	echo '<td>';
	echo "<b>current address</b>";
	echo '</td>';
	echo '<tr>';
	echo '<td>';	
	echo "<b>address</b> :" . $row['Permanent_address'] . "<br/>";
	echo "<b>city</b> :" . $row['padd_city'] . "<br/>";
	echo "<b>state</b> :" . $row['padd_state'] . "<br/>";
	echo "<b>pin</b> :" . $row['padd_pin'] . "<br/>";
	echo '</td>';
	echo '<td>';
	echo "<b>address</b> :" . $row['current_address'] . "<br/>";
	echo "<b>city</b> :" . $row['current_city'] . "<br/>";
	echo "<b>state</b> :" . $row['current_state'] . "<br/>";
	echo "<b>pin</b> :" . $row['current_pin'] . "<br/>";
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	
	
}

?>
</body>
</html>
