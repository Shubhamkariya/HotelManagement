<?php
session_start();
?>
<html>
<head>
<TITLE>Hotel Booking</TITLE>
</head>
<style>

header
	{
		background-color: black;
		text-align:center;
		
	}

footer
	{
		position:absolute;
		background-color:black;
		color:white;
		top:700px;
		width:100%;	
	}
.split {
  width: 100%;
 position: fixed;
 overflow-x: hidden;
}
.left{
float:left;
width:50%
}

.right{
 float:right;
width:50%;
}

.centered{
 position: absolute;
 top: 50%;
 transform: translate(-50%,-50%);
 text-align: center;
}
body{
position:absolute;
width:100%
}
.main
{

height:100%;
position:relative;
width:100%;
border:1px solid black;
}
form
{
	background-color:light-blue;
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
<p align="right" style="color:black">
<img src="avatar.jpg" width="50dp" align="right"></img>
<?php
 echo "HELLO,".$_SESSION["name"];
?></p>
<img src="avatar.jpg" width="50dp" align="right"></img>
<p><a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/main.html"><button >HOME</button></a></p>
<div class="main">
<div class ="left">
<img src="20.jpg" width="100%" height="550px" id="rotator">
<script type="text/javascript">
(function () {
      var rotator=document.getElementById('rotator');
      var delayInSeconds = 2;
      var images=['6.jpg','7.jpg','8.jpg','9.jpg','11.jpg'];
      var num=0;
      var changeImage = function()
      {
        var len = images.length;
        rotator.src = images[num++];
        if(num==len)
        {
          num=0;
        }
      };
      setInterval(changeImage,delayInSeconds*1000);
})();
</script>
</div>
<div class ="right" width="50%" height="200px">
<h3><u>Please Enter The Following Details.</u></h3><br>
<form action="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/bill1.php" method="POST">
<fieldset>
<LEGEND> DINNING BOOKING</LEGEND>
DINNING TYPE <input type="radio" name="type" value="AC" required>AC
		<input type="radio" name="type" value="NONAC" required>NON-AC<br>
How Many Tables You Want To Book:<input type="numeric" name="table" placeholder="1-2" required><br><br><br><br>
At What Time You Want to Book The Table:<input type="time" name="time" required><br><br><br><br>
<!--BOOK TABLE ONLINE?:<input type="radio" name="book" value="yes" required>YES
			<input type="radio" name="book" value="NO" required>NO<br><br><br><br>-->
<input type="submit" name="book" value="Book">
</fieldset>
</form>
</div>
</div>
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

