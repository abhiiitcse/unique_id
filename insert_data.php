<?php
require_once('connect_db.php');

  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['user_id'])) {
    if (isset($_COOKIE['user_id']) && isset($_COOKIE['username'])) {
      $_SESSION['user_id'] = $_COOKIE['user_id'];
      $_SESSION['username'] = $_COOKIE['username'];
    }
  }
  if(isset($_POST['submit']))
  {
	//$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	$unique_id=$_POST['uniqueid'];
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
		
	
		
		if((($unique_id <= $row1['lastrange1'])&&($unique_id > $row1['startrange1']))||(($unique_id <= $row1['lastrange2'])&&($unique_id > $row1['startrange2']))||(($unique_id <= $row1['lastrange3'])&&($unique_id > $row1['startrange3']))||(($unique_id <= $row1['lastrange4'])&&($unique_id > $row1['startrange4'])))
		
		{
			
			$home_url = 'http://' . $row1['ipaddr'] .  '/unique_id/northsubmit.php';
          header('Location: ' . $home_url);
			
		}
	

	  else if((($unique_id <= $row2['lastrange1'])&&($unique_id > $row2['startrange1']))||(($unique_id <= $row2['lastrange2'])&&($unique_id > $row2['startrange2']))||(($unique_id <= $row2['lastrange3'])&&($unique_id > $row2['startrange3']))||(($unique_id <= $row2['lastrange4'])&&($unique_id > $row2['startrange4'])))
	  {
		  $home_url = 'http://' . $row2['ipaddr'] .  '/unique_id/southsubmit.php';
          header('Location: ' . $home_url);
	  } 
	  else if((($unique_id <= $row3['lastrange1'])&&($unique_id > $row3['startrange1']))||(($unique_id <= $row3['lastrange2'])&&($unique_id > $row3['startrange2']))||(($unique_id <= $row3['lastrange3'])&&($unique_id > $row3['startrange3']))||(($unique_id <= $row3['lastrange4'])&&($unique_id > $row3['startrange4'])))
		
		{
			$home_url = 'http://' . $row3['ipaddr'] .  '/unique_id/eastsubmit.php';
          header('Location: ' . $home_url);
	   }
	  else if((($unique_id <= $row4['lastrange1'])&&($unique_id > $row4['startrange1']))||(($unique_id <= $row4['lastrange2'])&&($unique_id > $row4['startrange2']))||(($unique_id <= $row4['lastrange3'])&&($unique_id > $row4['startrange3']))||(($unique_id <= $row4['lastrange4'])&&($unique_id > $row4['startrange4']))) 
	  {
		  $home_url = 'http://' . $row4['ipaddr'] .  '/unique_id/westsubmit.php';
          header('Location: ' . $home_url);
	  }
	   
  
 }
 else
	$ui="please enter unique id";
	
}
  
?>

<html>
<head>
<title>search for personal record</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<BODY>
<h2 id="para1">INDIAN INSTITUTE OF TECHNOLOGY, MANDI</h2><hr width="1000"/>
<h3>Welcome to unique id project</h3>

<?php
if (isset($_SESSION['username'])) 
{
	echo '<a href="logout.php">log out</a>';
	

?>
<form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>"  >
<label for="uniqueid">Unique ID</label>
<p><input type="text" id="uniqueid" name="uniqueid" />&nbsp;&nbsp;&nbsp;<? echo $ui; ?></p>

<input type="submit" name="submit" value="submit" />  
</form>
<?
}
else
{
	echo 'please Login to access this page';
	echo '<a href="login.php">Login Here</a>';
} 


?>
</body>


</html>
