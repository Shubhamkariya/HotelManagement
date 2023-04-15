<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body
{
	margin-top: 100px;
	margin-bottom:100px;
	margin:right: 150px;
	margin-left:P80px;
}
</head>
<body>
	<center><h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND MYSQL</h1><center>
	<p><a href ="register.php">register</a> | <a href="login.php">LOGIN</a></p>
	<h3>Login Form</h3>
	<form action="" method="POST">
	Username:<input type="text" name="user"><br>
	Password:<input type="text" name="pass"><br>
	<input type="submit" value="Login" name="submit"><br>
	</form>
	<?php
	if(isset($_POST["submit"]))
	{
		if(!empty($_POST["user"])&& !empty($_POST['pass'])){
	
		$user=$POST['user '];
		$pass=$POST['pass'];
	$conn=mysql_connect('localhost','root','')or die(mysql_error());
	mysql_select_db('user_registration')or die("cannont select DB");
	$query=mysql_query("SELECT * FROM LOGIN WHERE USERNAME ='".$user."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbusername=$row['username'];
			$dbpassword=$row['password'];
		}
		if($user==$dbusername && $pass ==$dbpassword)
		{
		session_start();
		$_SESSION['sess_user']=$user;
		header("LOCATION:member.php");
		}
}
		else{
			echo "INAVLID USERNAME OR PASSWORD";
		  }
	}
		else{
			echo "ALL FIELD ARE REQUIRED";
	}
}
?>
</body>
</html>
			
		
	}
	>
