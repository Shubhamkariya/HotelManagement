<html>
<head>
<title> SIGN UP </title>
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
   document.getElementById("res2").innerHTML=xmlhttp.responseText;
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
   document.getElementById("res3").innerHTML=xmlhttp.responseText;
  }
 }
}
/*
var xmlhttp=false;
function validate3(name2)
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
 xmlhttp.open("GET","validate3.php?email="+name2,true);
 xmlhttp.onreadystatechange = statechanged
 xmlhttp.send(null);
 function statechanged()
 {
  if(xmlhttp.readyState == 4)
  {
   document.getElementById("res4").innerHTML=xmlhttp.responseText;
  }
 }
}
*/
</script>
</head>
<style>
	body{
		background-image: url("9.jpg");
		height:100%;	
		width:100%;
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
	<center>
	<div >
		<form action="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/back.php" method="POST">
		<fieldset >
		<legend> SIGNUP AS AN CUSTOMER</legend>
		NAME:<input type="text" name="n" onChange="validate_name(this.value)" required><br><br><br>
		<div id="res1"></div>
		USERNAME:<input type="text" name="name" onChange="validate1(this.value)" required><br><br><br>
		<div id="res2"></div>
		PASSWORD:<input type="password" name="pass" onChange="validate2(this.value)" required><br><br><br>
		<div id="res3"></div>
		EMAIL ID:<input type="text" name="email" onChange="validate3(this.value)" required><br><br><br>
		<div id="res4"></div>		
		MOBILE NO:<input type="text" name="mno" onChange="validate_email(this.value)" required><br><br><br>
		<div id="res5"></div>
		<input type="submit" name="s1" value="signup">
		<input type="reset" name="r1" value="reset">
		</fieldset>
	</form>
	</div>
	</center>

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
</img>
</body>
</html>
