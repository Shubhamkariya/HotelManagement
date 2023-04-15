<?php
function validate2($password)
{
	if(strlen($password)<5)
		echo "short";		
		//return "password is Too Short!";
	if(strlen($password)>10)
		return "password Valid.";
	if(!preg_match("/^[a-zA-z0-9]+$",$password))
	{
		return "Must Contain Alphanumeric.";
	}
	else
		return "password is Valid";
}
echo validate2($_GET['password']);
?>
