<?php
function validate($name)
{
	if($name=="")
		return "Please Enter the Username:";
	if(strlen($name)<5)
		return "Name is Too Short!";
	if(strlen($name)>10)
		return "Username Valid.";
	if(!pregmatch("/^[a-zA-z0-9]+$",$name))
	{
		return "Must Contain Alphanumeric.";
	}
	else
		return "Username is Valid.";
}
echo validate($_GET['name']);
?>
