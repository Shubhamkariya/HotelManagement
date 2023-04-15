<?php
  $a=$_COOKIE['on'];
  if($a=="save")
  {
?>
<html>
<head>
<title>|| ACCOUNT LOGIN ||</title>
</head>
<body>
<form action="http://192.168.16.1/TYAG14/MANAGEMENT/cookie.php" method="POST">
USERNAME:- <input type="text" name="user" value="<?php echo $_COOKIE['user']?>"><br><br>
PASSWORD:- <input type="password" name="pwd" value="<?php echo $_COOKIE['pwd']?>"><br><br>
REMEMBER ME:- <input type="checkbox" name="save" value="save"><br><br>
<input type="submit" value="submit" name="s1" value="Sign In"><br><br>
</form>
</body>
</html>
<?php
     }
    else{
?>
<html>
<head>
<title>||ACCOUNT LOGIN||</title>
</head>
<body>
<form action="http://192.168.16.1/TYAG14/MANAGEMENT/cookie.php" method="POST">
USERNAME:- <input type="text" name="user"><br><br>
PASSWORD:- <input type="password" name="pwd"><br><br>
REMEMBER ME:- <input type="checkbox" name="save" value="save"><br><br>
<input type="submit" value="submit" name="s1" value="Sign In"><br><br>
</form>
</body>
</html>
<?php
  }
?>
