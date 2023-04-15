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
	$a=$_POST['table'];
	$b=$_POST['time'];
	$c=$_POST['type'];
/*echo $b;
echo $c;
echo $d;*/
//$query="select room_rate from room where room_type='$b'";
//echo $query;
//$result=pg_query($conn,$query);
//$row=pg_fetch_array($result);
	{
?>
<html>
<head>
<style>
	table,th,td{
			border: 1px solid black;
			border-collapse:collapse;
		   }
	th,td{
		padding:15px;
		text-align:left;
	     }
	th{
		text-align:left;
	  }

	table{
	     	border-spacing: 15px;
	     }

	table#t01 tr: nth-child(even){
					background-color: #eee;
					}

	table#t01 tr: nth-child(odd){
					background-color: #fff;
					}
	
	table#t01 th{
			width: 100%;
			background-color: #f1f1c1;
		 }

	header
	{
		background-color: black;
		text-align:center;
		
	}
	p{
		align="right" style="color:black"
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
					<img src="IMG@.jpg" width="800px" height="140px"></img>
				</header>
		</fieldset>
	</form>
			</div>

</header>
	
	<center><h3>We Are Delighted! Thank You For Choosing Us!</h3></center>
	<p><a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/main.html"><button >HOME</button></a></p>

	<table style="width:100%">
	<caption>BILL Details</caption>
	<th>
	<form>
	<fieldset>
	<legend><legend>	
       	<table id="t01">
	<tr>
		<th>NAME</th>
		<th>EMAIL-ID</th>
		<th>MOBILE-NO</th>
		<th>USERNAME</th>
		<th>DINNING TABLE</th>
		<th>RATE</th>
	</tr>
	<tr>
		<td><?php echo $_SESSION["name"];?></td>
		<td><?php echo $_SESSION["email"];?></td>
		<td><?php echo $_SESSION["mob"];?></td>
		<td><?php echo $_SESSION['username'];?></td>
		<td><center><?php echo $a;?></center></td>
		<td><?php
			if($c=="AC")
			{
				echo "AC = ".$ac=500;?><br>
				<?php
				$rr=0;
				$add=$rr+$ac;		
				$mul=$add*$a;	 
				echo "TOTAL = ".$mul;?><br>
			<?php			
			}
			else
			{
				echo "NONAC = ".$ac=300;?><br>
				<?php
				$rr=0;
				$add=$rr+$ac;				
				$add=$rr+$ac;			 
				echo "TOTAL = ".$add;?><br>
			<?php			
			}
			?></center></td></td>
	</tr>		
</fieldset>
	</form>
</table>
</body>
<center><h4><a href="http://192.168.16.1/TYAG14/MANAGEMENT/img/login_signup/feedback.html">Your Feedback Is Valueable To Us! Please Rate Us.</a><h4></center>

</html>

<?php
	}
}
?>
