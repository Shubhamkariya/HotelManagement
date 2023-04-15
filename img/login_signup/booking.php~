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
	return "ENTER USERNAME AND PASSWORD";
}
else
$query="select * from cust where cust_email='$a' and cust_pass='$b'";
$result=pg_query($conn,$query);
$row=pg_fetch_array($result);
if($a==$row['cust_email'] && $b==$row['cust_pass'])
{
//echo $row['cust_username'];
$c=$row['cust_name'];
$_SESSION['name']=$c;
$d=$row['cust_email'];
$_SESSION['email']=$d;
$e=$row['cust_mob'];
$_SESSION['mob']=$e;
$f=$row['cust_username'];
$_SESSION['username']=$f;
?>
<html>
<head>
<title> BOOKING WEBPAGE</title>
</head>
<style>
header
	{
		background-color:black;
	}
footer
	{
		color:white;	
		background-color:black;
	}
	bk
	{	background-color:white;
	}
		

</style>
</head>
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
					<center><img src="IMG@.jpg" width="800px" height="200px"></img></center>
				</header>
		</fieldset>
	</form>
			</div>

</header>
</a>

<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/main.html">HOME</a>
<p align="right" style="color:black">
<img src="avatar.jpg" width="50dp" align="right"></img>
<?php
 echo "HELLO,".$_SESSION["name"];
?></p>
<div style="background-color:red;width:100%;">
<div style="background-color:white;float:left;width:50%;height:100%">



<!--<div class="column">
	<button>Click Here To Book Hotel</button>
	<img src="7.jpg" style="cursor:pointer;" onclick="window.location='http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/hotelbook.php'">
</div>


<div class="column">
	<button>Click Here To Book Dinning</button>
	<img src="2.jpg" style="cursor:pointer;" onclick="window.location='http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/resbook1.php'">
</div>-->



<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/hotelbook.php"><img src="21.jpg" style="height:95%;"></img></a>
<button>Click ABOVE To Book Room</button>
</div>


<div style="background-color:white;float:left;width:50%;height:100%">
<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/resbook1.php"><img src="2.jpg" style="width:100%;height:95%;"></img></a>
<button>Click ABOVE To Book Dinning</button>
</div>

</div>
</form>
<div>
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
</div>
</body>
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

