<?php
function validate1($name)
{
	if($name=="")
		return "Please Enter the Username:";
	if(strlen($name)<5)
		return "Name is Too Short!";
	if(strlen($name)>10)
		return "Username Valid.";
	if(!preg_match("/^[a-zA-z0-9]+$",$name))
	{
		return "Must Contain Alphanumeric.";
	}
	
}

echo validate1($_GET['name']);
?>

