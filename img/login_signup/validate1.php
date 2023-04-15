<?php
function validate1($name)
{
	if($name=="")
		return "Please Enter the Username:";
	if(strlen($name)<5)
		return "USERNAME is Too Short!";
	if(!preg_match("/^[a-z0-9]+$",$name))
	{	
		if(strlen($name)>10)
			return "";
		else
		return "Must Contain Alphanumeric.";
	}
	else
	{
		if(strlen($name)==10)
			return "VAlid";
	}
}

echo validate1($_GET['name']);
?>

