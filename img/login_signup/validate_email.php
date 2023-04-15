<!--<?php
function validate3($email)
{
	if($email=="")
		return "Please Enter the email";
	if(strlen($email)<5)
		return "email is Too Short!";
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		return "Must Contain Alphanumeric.";
	}
	else
		return "vALID"
}
echo validate3($_GET['email']);
?>
-->
