<?php
$cstr1="host=192.168.16.1 port=5432 dbname=TYAG23 user=TYAG23 password=";
$conn=pg_connect($cstr1);
if(!conn)
{
	echo "Connection Failed <br> ";
	return;
}
$query="insert into signup values('" .$_POST['name']. "','" .$_POST['email']. "','" .$_POST['username']. "','". $_POST['password']."');";
$result= pg_query($conn,$query);
if(!result)
{
	echo " Username and or Password is incorrect.";

}
else 
{
?>
<html>
<head>
<title>Registered Successfully</title>
<body background="success.jpg"  >
<big><big><big><br><br><br><br><br><br>
<font color="white"><center>Registered Successfully</big></big></big><br>
<a href="login.html">Click here to login</a>
</body>
</head>
</html>
<?php	
}

?>
