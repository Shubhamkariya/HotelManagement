<!DOCTYPE HTML>
<html>
<head>
<title>Feedback</title>
</head>

<style>
header
	{
		background-color: black;
		text-align:center;
		
	}

body{
	background: #FFF;
    }

feedback{
		height: 500;
		width: 600px;
		background: #FFF;
		transform:translate(65%,20%);
		border-radius: 15px;
		box-shadow:0px 2px 30px 0px #000;
		padding:0;
		margin:0;
	}

.fheadline{
		color: #333;
		font-family:Century Gothic;
		font-size: 30px;
		font-weight:bold;
		text-align:center;
	  }

input[type="text"],input[type="email"],textarea
{
	width:95%;
	color:#000;
	font-size:15px;
	letter-spacing: 3px;
	margin: 10px;
	margin-top: -1px;
	background:none;
	box-sizing:border-box;
	padding:10px;
	border:none;
	border-bottom: 2px solid rgb(190,190,190);
	outline:none;
	resize:none;
	transition:0.5s all;
	font-family:"Century Gothic";
}

input[type="submit"],input[type="reset"]
{
	background: #ffd877;
	color: #000;
	width: 95%;
	font-size: 18px;
	font-weight: 600;
	text-transform:capitalize;
	border:none;
	outline:none;
	cursor:pointer;
	padding:13px 0;
	letter-spacing:2px;
	margin:15px;
	margin-top:-1px;
	transition:0.5s all;
	font-family:Futura PT;
}

input[type="submit"]:hover
{
	color: #FFF;
	border:none;
	box-shadow: inset 0px 0px 90px 0px #00f;
	transition: 0.9s;
}

input[type="reset"]:hover
{
	color: #FFF;
	border:none;
	box-shadow:inset 0px 0px 90px 0px #000;
	transition: 0.9s;
}

.query
{
	color: #333;
	font-family:"Century Gothic";
	font-size: 16px;
	margin: 10px;
	line-height:3;
	text-align: center;
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

<div class="feedback">
<form method="post">
<div class="fheadline">Feedback</div><br><br>
<input type="text" name="nm" value="" placeholder="Enter Name" autofocus><br><br>
<input type="email" name="email" value="" placeholder="Enter Email"><br><br>
<textarea name="message" placeholder="Enter Your Feedback Here..."></textarea><br><br>
<input type="submit" name="sub" value="SEND"><br><br>
<input type="reset" name="reset" value="RESET">
</form>
<span class="query">
<h4>For Any Queries Contact Us On:</h4> <ul>020-25438790</ul>
			       <ul>020-25438797</ul>
</span>
<div>
</body>
<html>

<?php
$conn=pg_connect("host=192.168.16.1 port=5432 dbname=TYAG14 user=TYAG14 password=");
if(!$conn)
{
  echo"Connection NOT Established";
	return ;
}
else
{
//if(empty($a) || empty($b))
{
//	return "ENTER USERNAME AND PASSWORD";
}
//else
{$a=$_POST['feedback'];
$b=$_POST['nm'];
//$query="UPDATE cust set cust_feedback='$a' where cust_name='$b'";
$query="update cust set cust_feedback='".$_POST['message']."' where cust_name='".$_POST['nm']."' AND cust_email='".$_POST['email']."'";
//echo $query;
$result=pg_query($conn,$query);
if(!$result)
	echo "Query failed";
else
	?>
	<script>
	 alert("Thank You! We Successfully Received Your Feedback!");
	</script>
	<?php
}
}
?>
