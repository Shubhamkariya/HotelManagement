<?php
$cstr="host=192.168.16.1 port=5432 dbname=TYAG23 user=TYAG23 password=";
$conn=pg_connect($cstr);
if(!conn)
{
	echo "Connection Failed <br> ";
	return;
}
$query="insert into login values('" .$_POST['user_name']. "','". $_POST['password']."');";
$result= pg_query($conn,$query);
if(!result)
{
	echo " Username and or Password is incorrect.";

}
else 
{
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Shutter Stock</title>
<link href="style3.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="">
<header>
<div class="nav-bar">
<img src="logo.jpg" class="logo">
<ul class="menu">
<li><a href="login.php">Home</a></li>
<li><a href=" ">Portfolio</a></li>
<li><a href=" ">Testimonials</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="blog.html">Blog</a></li>
<li><a href="about.html">About Us</a></li>
</ul>
</div>
<div class="TestRotator">
<img src="pic1.jpg"  width="100%" height="100%" id="rotator">
<script type="text/javascript">
(function()
{
	var rotator=document.getElementById('rotator');
	var delayInSeconds=2;	
	var images=['2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg','19.jpg','20.jpg','21.jpg','22.jpg','23.jpg','24.jpg','25.jpg','26.jpg','27.jpg','28.jpg','29.jpg','30.jpg','35.jpg'];
	var num=0;
	var changeImage= function()
	{
		var len=images.length;
		rotator.src=images[num++];
		if(num==len)
		{
		num=0;
		}
	};
setInterval(changeImage, delayInSeconds*1000);
}) ();
</script>
</div> 


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="welcome">

<a href="#" class="btn btn1">Like</a>
<a href="#" class="btn btn2">Subscribe</a>
</div>
</header>
</body>
</html>


<?php	
}

?>
