<html>
<head>
<title> LOGIN </title>
</head>
<script type="text/javascript">
var xmlhttp=false;
function validate_name(name)
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
 xmlhttp.open("GET","validate.php?name="+name,true);
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
function validate_password(name)
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
 xmlhttp.open("GET","validate1.php?password="+name,true);
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

</script>
</head>




<style>
footer
	{
		background-color:black;
		color:white;
	}
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
	}
a	{
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
					<a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/main.html"><img src="IMG@.jpg" width="800px" height="140px"></img></a>
				</header>
		</fieldset>
	</form>
			</div>

</header>
<img>
	<center>
	<div>
		<form action="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/empdetails.php" method="POST">
		<fieldset>
		<legend> LOGIN AS AN EMPLOYEE</legend>
		USERNAME:<input type="text" name="e_name" onKeyUp="validate(this.value)" required><br><br><br>
		<div id="res1"></div>
		PASSWORD:<input type="password" name="e_password" onKeyUp="validate1(this.value)" required><br><br><br>
		<div id="res2"></div>
		SAVE PASSWORD<input type="checkbox" name="checkbox" value="save"><br><br>
		<input type="submit" name="submit" value="submit"><br><br>
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
	<a href="fb.html"><img src="fb.jpg" width="7%"></img></a>
	<a href="yt.html"><img src="yt.jpg" width="7%"></img></a>
	<a href="in.html"><img src="it.jpg" width="7%"></img></a>
	<a href="tw.html"><img src="tw.jpg" width="5%"></img></center></a>
	<center><h5>Copyrights @2018 RoyalHotel. All Rights Reserved. </h5></center>
	</FIELDSET>
	
</footer>
</body>
</html>
