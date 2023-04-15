<?php
$conn=pg_connect("host='localhost' port='5432' dbname='postgres' user='postgres password='shubham'");
if(!$conn)
{
 echo"Connection NOT Established";
}
else
{
$query="select * from customer where email=' ".$_POST['email']."' AND password='".$_POST['password']."'";
$result=pg_query($conn,$query);
if(!$result)
 echo"query failed";
else
{while($row=pg_fetch($result))
{
 echo $row[0];
 echo $row[1];
}
}
}
?>
