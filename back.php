<?php
$conn=pg_connect("host=192.168.16.1 port=5432 dbname=TYAG14 user=TYAG14 password=");
if(!$conn)
{
  echo"Connection NOT Established";
	return ;
}
else
{
//insert into cust(cust_name, cust_mob,cust_email,cust_username, cust_pass) values('ss','1212','ssdf','sss','sss');*/
$a=$_GET['name'];
$b=$_GET['pass'];
$c=$_GET['n'];
$d=$_GET['mno'];
$e=$_GET['email'];
$f=$_GET['pass'];
$query="insert into cust values('$a','$c','$d','$e','$b','".$_POST['feedback']."')";
$result=pg_query($conn,$query);
if(!$result)
{
	echo" ";
?>
 <html>
<head>
<title> LOGIN </title>
</head>
<script type="text/javascript">
var xmlhttp=false;
function validate1(name)
{
 if(window.XMLHttpRequest)
 {
   xmlhttp= new XMLHttpRequest();
 }
 else if(window.ActiveXObject)
 {
   xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
 }
 if(xmlhttp == null)
 {
  alert("Browser does not support http page.");
  return;
 }
 xmlhttp.open("GET","validate1.php?name="+name,true);
 xmlhttp.onreadystatechange = statechanged
 xmlhttp.send(null);
 function statechanged()
 {
  if(xmlhttp.readyState == 4)
  {
   document.getElementById("res1").innerHTML=xmlhttp.responseText;
  }
 }
}
var xmlhttp=false;
function validate2(name1)
{
 if(window.XMLHttpRequest)
 {
   xmlhttp= new XMLHttpRequest();
 }
 else if(window.ActiveXObject)
 {
   xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
 }
 if(xmlhttp == null)
 {
  alert("Browser does not support http page.");
  return;
 }
 xmlhttp.open("GET","validate2.php?pass="+name1,true);
 xmlhttp.onreadystatechange = statechanged
 xmlhttp.send(null);
 function statechanged()
 {
  if(xmlhttp.readyState == 4)
  {
   document.getElementById("res2").innerHTML=xmlhttp.responseText;
  }
 }
}
</script>
</head>
<style>
	body{
		background-image: url("9.jpg");
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
		text-align:center;
	}

a	{
		color:white;
	}

p
	{
		text-align:right;
	}

button {
		background-color:black;
		color:white;
	}

footer
	{
		background-color:black;
		color:white;
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

<img>
	<p><a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/main.html"><button>HOME</button></a></p>	
	<center>
	<div>
		<form action="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/booking.php" method="POST">
		<fieldset>
			
		<legend> LOGIN AS AN CUSTOMER</legend>
		USERNAME:<input type="text" name="name" placeholder="shubhstar123" onChange="validate1(this.value)"><br><br><br>
		<div id="res1"></div>
		PASSWORD:<input type="password" name="pass" placeholder="******"onChange="validate2(this.value)"><br><br><br>
		<div id="res2"></div>
		SAVE PASSWORD<input type="checkbox" name="checkbox" value="save"><br><br>
		<input type="submit" name="submit" value="submit"><br><br>
		<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/signup.php">DONT HAVE ANY ACCOUNT !! CLICK HERE</a><br><br>
		<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/loginemp.php">LOGIN AS AN EMPLOYEE OF HOTEL</a>		
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
	<a href="fb.html"><img src="MANAGEMENT/fb.png" width="40px"></img></a>
	<a href="yt.html"><img src="/TYAG14/MANAGEMENT/img/yt.jpg" width="80dp"></img></a>
	<a href="in.html"><img src="it.jpg" width="80dp"></img></a>
	<a href="tw.html"><img src="tw.jpg" width="50dp"></img></center></a>
	</FIELDSET>
	
</footer>
</body>
</html>
<?php
}

else
{

?>
<html>
<head>
<title> LOGIN </title>
</head>
<script type="text/javascript">
var xmlhttp=false;
function validate1(name)
{
 if(window.XMLHttpRequest)
 {
   xmlhttp= new XMLHttpRequest();
 }
 else if(window.ActiveXObject)
 {
   xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
 }
 if(xmlhttp == null)
 {
  alert("Browser does not support http page.");
  return;
 }
 xmlhttp.open("GET","validate1.php?name="+name,true);
 xmlhttp.onreadystatechange = statechanged
 xmlhttp.send(null);
 function statechanged()
 {
  if(xmlhttp.readyState == 4)
  {
   document.getElementById("res1").innerHTML=xmlhttp.responseText;
  }
 }
}
var xmlhttp=false;
function validate2(name1)
{
 if(window.XMLHttpRequest)
 {
   xmlhttp= new XMLHttpRequest();
 }
 else if(window.ActiveXObject)
 {
   xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
 }
 if(xmlhttp == null)
 {
  alert("Browser does not support http page.");
  return;
 }
 xmlhttp.open("GET","validate2.php?pass="+name1,true);
 xmlhttp.onreadystatechange = statechanged
 xmlhttp.send(null);
 function statechanged()
 {
  if(xmlhttp.readyState == 4)
  {
   document.getElementById("res2").innerHTML=xmlhttp.responseText;
  }
 }
}

</script>
</head>
<style>
	body{
		background-image: url("9.jpg");
		height:100%;
		background-position:center;
		background-repeat:no-repeat;
		background-size:cover;
		opacity:1.0;
		filter:alpha(opacity=50);
		
	    }
	div	{
			color:white;
		}
header
	{
		background-color:black;
		text-align:center;
	}

a	{
		color:white;
	}

p
	{
		text-align:right;
	}

button {
		background-color:black;
		color:white;
	}

footer
	{
		background-color:black;
		color:white;
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
					<img src="IMG@.jpg" width="800px" height="140px"></img>
				</header>
		</fieldset>
	</form>
			</div>

</header>
<p><a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/main.html"><button>HOME</button></a></p>
<img>
	<center>
	<div>
		<form action="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/booking.php" method="POST">
		<fieldset>
		<legend> LOGIN AS AN CUSTOMER</legend>
		USERNAME:<input type="text" name="name" onChange="validate1(this.value)"><br><br><br>
		<div id="res1"></div>
		PASSWORD:<input type="password" name="pass" onChange="validate2(this.value)"><br><br><br>
		<div id="res2"></div>
		SAVE PASSWORD<input type="checkbox" name="checkbox" value="save"><br><br>
		<input type="submit" name="submit" value="submit"><br><br>
		<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/signup.php">DONT HAVE ANY ACCOUNT !! CLICK HERE</a><br><br>
		<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/loginemp.php">LOGIN AS AN EMPLOYEE OF HOTEL</a>		
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
	<a href="fb.html"><img src="MANAGEMENT/fb.png" width="40px" height="50px"></a>
	<a href="yt.html"><img src="yt.jpg" width="80px" height="50px"></a>
	<a href="in.html"><img src="it.jpg" width="80px" height="50px"></a>
	<a href="tw.html"><img src="tw.jpg" width="50px" height="50px"></center></a>
	</FIELDSET>
	
</footer>
</body>
</html>
<?php
}
}?>
