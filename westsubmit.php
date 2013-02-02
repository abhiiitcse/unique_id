<?php
require_once('connect_db.php');

  session_start();

  // If the session vars aren't set, try to set them with a cookie
  
	  if(isset($_POST['submit']))
	{
		$uniqueid=$_POST['uniqueid'];
		$firstname=$_POST['firstname'];
		$minit=$_POST['minit'];
		$lastname=$_POST['lastname'];
		$fathersname=$_POST['fathersname'];
		$mothername=$_POST['mothername'];
		$sex=$_POST['sex'];
		$birthyear=$_POST['birthyear'];
		$birthmonth=$_POST['birthmonth'];
		$birthdate=$_POST['birthdate'];
		$dateofbirth=$birthyear . '-' . $birthmonth . '-' . $birthdate ;
		$occupation=$_POST['occupation'];
		$marriedstatus=$_POST['marriedstatus'];
		$email=$_POST['email'];
		$permanentaddr=$_POST['permaddr'];
		$permcity=$_POST['pcity'];
		$permstate=$_POST['pstate'];
		$permpin=$_POST['ppin'];
		$phoneno=$_POST['phoneno'];
		if(!empty($uniqueid))
		{
			//connect to mysql server
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		
			if(!$con)
			{
				die('could not connect' . mysql_error());
			}
			$query1="insert into personal_info(Unique_id,Fname,Minit,Lname,Sex,Date_of_birth,married_status,email) VALUES
			('$uniqueid','$firstname','$minit','$lastname','$sex','$dateofbirth','$marriedstatus','$email')";
			$query2="insert into address_info(Unique_id,Father_name,Mother_name,Occupation,
			Permanent_address,padd_city,padd_state,padd_pin,current_address,current_city,current_state,current_pin,phone_no)
			VALUES('$uniqueid','$fathersname','$mothername','$occupation','$permanentaddr','$permcity','$permstate','$permpin','$currentaddr',
			'$currentcity','$currentstate','$currentpin','$phoneno') ";	 
			if((mysqli_query($dbc,$query1))&&(mysqli_query($dbc,$query2)))
				echo 'your data is successfully inserted';
		}
		else
			echo 'please enter your unique id';
			
	}
	else
	{
	
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
<table><tr>
<td><label for="uniqueid">Unique ID</label></td>
<td><p><input type="text" id="uniqueid" name="uniqueid" />&nbsp;&nbsp;&nbsp;<? echo $ui; ?></p></td></tr>
<tr><td><label for="firstname">FName</label></td>
<td><input type="text" id="firstname" name="firstname" /></td></tr>
<tr><td><label for="minit">Minit</label></td>
<td><input type="text" id="minit" name="minit" /></td></tr>
<tr><td><label for="lastname">Lname</label></td>
<td><input type="text" id="lastname" name="lastname" /></td></tr>
<tr><td><label for="fathersname">Father name</label></td>
<td><input type="text" id="fathersname" name="fathersname" /></td></tr>
<tr><td><label for="mothername">Mother name</label></td>
<td><input type="text" id="mothername" name="mothername" /></td></tr>
<tr><td><label for="sex">sex</label></td>
<td>M<input type="radio" id="sex" name="sex" value="M"/>
F<input type="radio" id="sex" name="sex" value="F" /></td></tr>

<tr><td><label for="dateofbirth">Date of birth</label></td>
<td><select name="birthyear" id="birthyear">
<option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option>
<option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option>
<option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option>
<option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option>
<option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option>
<option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option>
<option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option>
<option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option>
<option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option>
<option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option>
<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option>
<option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option>
<option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option>
<option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
<option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option>
<option value="2010">2010</option><option value="2011">2011</option>
</select>
<select name="birthmonth">
<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option>
<option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option>
<option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
</select>
<select name="birthdate">
<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option>
<option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option>
<option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
<option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
<option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
<option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option>
<option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option>
<option value="29">29</option><option value="30">30</option><option value="31">31</option>
</select>

</td></tr>

<tr><td><label for="occupation">Occupation</label></td>
<td><input type="text" id="occupation" name="occupation" /></td></tr>
<tr><td><label for="marriedstatus">Married status</label></td>
<td>Yes<input type="radio" id="marriedstatus" name="marriedstatus" value="yes" />
No<input type="radio" id="marriedstatus" name="marriedstatus" value="no" /></td></tr>
<tr><td><label for="email">Email</label></td>
<td><input type="text" id="email" name="email" /></td></tr>
</table>
<br/>
<table border="0">
<tr>
<td> <b>permanent address : </b></td>	<td></td></tr>

<tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<textarea rows="5" cols="30" name="permaddr"></textarea><br/>City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pcity" value=""><br/>State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pstate" value=""><br/>Pin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ppin"><br/>phone no.<input type="text" name="phoneno"></td>
		
	</tr>
	</table>
<br/>
<input type="submit" name="submit" value="submit" />  
</form>
<?
}
else
{
	echo 'please Login to access this page';
	echo '<a href="login.php">Login Here</a>';
} 
}


?>
</body>


</html>

