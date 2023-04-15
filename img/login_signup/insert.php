<?php
$c_id=$_POST['c_id'];
$name1=$_POST['name1'];
$m_no=$_POST['m_no'];

$cstr ="host=192.168.16.1 port=5432 dbname=TYAG14 user=TYAG14 password= ";
$conn =pg_connect($cstr);
if(!$conn)
{
	echo "CONNECTION FAILED <br>";
	return ;
}
else
{
$result=pg_query($conn,"insert into customer values(" .$_POST['c_id']. ",'" .$_POST['name1']. "'," .$_POST['m_no']. ")");
if(!$result)
{
	echo "value inserted failed";
}
else
{
	echo "value inserted ";
}
}
?>
