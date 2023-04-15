
<?php
session_start();
$conn=pg_connect("host=192.168.16.1 port=5432 dbname=TYAG14 user=TYAG14 password=");
if(!$conn)
{
  echo"Connection NOT Established";
	return ;
}
else
{
//insert into cust(cust_name, cust_mob,cust_email,cust_username, cust_pass) values('ss','1212','ssdf','sss','sss');*/
$a=$_POST['name'];
$b=$_POST['pass'];
if(empty($a) || empty($b))
{
	return "ENTER EMAIL AND PASSWORD";
}
else

$query="select * from cust where cust_email='$a' and cust_pass='$b'";
//echo $query;
$result=pg_query($conn,$query);
$row=pg_fetch_array($result);
if($a==$row['cust_email'] && $b==$row['cust_pass'])
{
$d=$row['cust_username'];
$c=$row['cust_name'];
$_SESSION["username"]=$d;
$_SESSION["pass"]=$b;
$_SESSION["name"]=$c;
?>
<html>
<head>
<title> LOGIN </title>
<head>
<style>
	body{
		background-image: url("1.jpg");
		height:100%;
		background-position:center;
		background-repeat:no-repeat;
		background-size:cover;
		
	    }
	div	{
			color:white;
		}
header
	{
		background-color:black;
	}
footer
	{
		color:white;	
		background-color:black;
	}
</style>
<body>
<header>
<form>
	<fieldset>
		<legend></legend>
			<div style="background-color:#F7FDFF">
	<form>
		<fieldset>
			<legend></legend>
				<header>
					<center><img src="IMG@.jpg" width="800px" height="140px"></img></center>
				</header>
		</fieldset>
	</form>
			</div>

</header>
<p align="right" style="color:white">
<img src="avatar.jpg" width="50dp" align="right"></img>
<?php
 echo "HELLO,".$_SESSION["name"];
?></p>
<img>
	<center>
	<div>
		<form action="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/booking1.php" method="POST">
		<fieldset>
		<legend> CAB BOOKING</legend>
		FROM:<input type="text" name="from" onKeyUp="validate(this.value)" required><br><br><br>
		<div id="res"></div>
		BOOK DATE:<input type="date" name="d_date" required><br><br><br><br><br>
		<input type="submit" name="submit" value="book">
		</fieldset>
	</form>
	</div>
	</center>
</img>
<footer height="10dp">
	<FIELDSET>
	<LEGEND></LEGEND>
	<h5><b>	CONTACT US</b></h5>
	<ul>	020-25438790  </ul>
	<ul>    020-25438797  </ul></center>
	<center><h5><b>	CONNECT US </b></h5>
	<a href="fb.html"><img src="fb.jpg" width="40dp"></img></a>
	<a href="yt.html"><img src="yt.jpg" width="80dp"></img></a>
	<a href="in.html"><img src="it.jpg" width="80dp"></img></a>
	<a href="tw.html"><img src="tw.jpg" width="50dp"></img></center></a>
	<center><h5>Copyrights @2018 RoyalHotel. All Rights Reserved. </h5></center>
	</FIELDSET>
	
</footer>
</html>
<?php
}
else
	{
		echo "USERNAME AND PASSWORD IS INVALID";
	?>
		<html>
		<br>DONT HAVE ANY ACCOUNT 
		<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/signup.php">SIGN_UP</a>
		</html>
	<?php
		
	}
}?>

