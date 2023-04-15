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
$a=$_SESSION["username"];
$f_c=$_POST['from'];
$date=$_POST['d_date'];
echo $date;
$query="UPDATE cust set cust_source_addr='$f_c' where cust_username='$a'";
$result=pg_query($conn,$query);
if(!$result)
{
	echo"NOT UPDATED";
}
else
	echo"UPDATED";

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

</style>
</head>
<body>
<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/main.html">HOME
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
<p align="right" style="color:black">
<img src="avatar.jpg" width="50dp" align="right"></img>
<?php
 echo "HELLO,".$_SESSION["name"];
?></p>

<center><h3>Your Cab Is Successfully Booked!<br>Select What You Want To Book Next?</h3></center>

<div style="width:100%;">
<div style="float:left;width:50%;height:100%">

<button>Click Below To Book Room</button>
<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/hotelbook.html"><img src="21.jpg" style="height:60%;"></img></a>
</div>


<div style="float:left;width:50%;height:100%">
<button>Click Below To Book Dinning</button>
<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/resbook1.html"><img src="2.jpg" style="width:100%;height:60%;"></img></a>
</div>
</div>
</form>
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
</body>
</html>
<?php
}
?>
