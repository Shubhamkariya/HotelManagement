<?php
$conn=pg_connect("host=192.168.16.1 port=5432 dbname=TYAG14 user=TYAG14 password=");
if(!$conn)
{
  echo"Connection NOT Established";
	return ;
}
else
{
 //insert into cust(cust_name, cust_mob,cust_email,cust_username, cust_pass) values('ss','1212','ssdf','sss','sss');*/
$a=$_POST['e_name'];
$b=$_POST['e_password'];
$query1="select * from admin where admin_name='$a' and admin_pass='$b'";
$result1=pg_query($conn,$query1);
$row12=pg_fetch_array($result1);
if(!$a==$row12['admin_email'] && !$b==$row12['admin_pass'])
{
$query="select * from emp where emp_email='$a' and emp_pass='$b'";
echo $query;
$result=pg_query($conn,$query);
$row1=pg_fetch_array($result);
if($a==$row1['emp_email'] && $b==$row1['emp_pass'])
{?>
<html>
<head>
<style>
	table,th,td{
			border: 1px solid black;
			border-collapse:collapse;
		   }
	th,td{
		padding:15px;
		text-align:left;
	     }
	th{
		text-align:left;
	  }

	table{
	     	border-spacing: 15px;
	     }

	table#t01 tr: nth-child(even){
					background-color: #eee;
					}

	table#t01 tr: nth-child(odd){
					background-color: #fff;
					}
	
	table#t01 th{
			width: 100%;
			background-color: #f1f1c1;
		 }

</style>
</head>
<body>
	
	<table style="width:100%">
	<caption>Employee Details</caption>
	<th>
	<form>
	<fieldset>
	<legend><legend>	
       	<table id="t01">
	<tr>
		<th>NAME</th>
		<th>EMAIL-ID</th>
		<th>MOBILE-NO</th>
		<th>USERNAME</th>
		<th>SALARY</th>
		<th>AGE</th>
	</tr>
	<tr>
		<td><?php echo $row1['emp_name']?></td>
		<td><?php echo $row1['emp_email']?></td>
		<td><?php echo $row1['emp_mob']?></td>
		<td><?php echo $row1['emp_username']?></td>
		<td><?php echo $row1['emp_salary']?></td>
		<td><?php echo $row1['emp_age']?></td>
	</tr>		
</fieldset>
	</form>
</table>
</body>
</html>
	<?php
}
else
	{
		echo "INVALID USERNAME OR PASSWORD";
	}
}
else
{?>
	<html>
	<style>
	table,th,td{
			border: 1px solid black;
			border-collapse:collapse;
		   }
	th,td{
		padding:15px;
		text-align:left;
	     }
	th{
		text-align:left;
	  }

	table{
	     	border-spacing: 15px;
	     }

	table#t01 tr: nth-child(even){
					background-color: #eee;
					}

	table#t01 tr: nth-child(odd){
					background-color: #fff;
					}
	
	table#t01 th{
			width: 100%;
			background-color: #f1f1c1;
		 }

</style>

	<form action="<?php $_PHP_SELF?>" method="POST">
	<select name="detail">
	<option value="EMPLOYEE">Employee
	<option value="CUSTOMER">CUSTOMER
	</select>	
	<input type="submit" value="submit" name="submit">
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		if($_POST['detail']==EMPLOYEE)
		{
		//echo "employee";
	$query1="select * from emp";
	//echo $query1;
	$result12=pg_query($conn,$query1);
	?>
	<html>
	<style>
	table,th,td{
			border: 1px solid black;
			border-collapse:collapse;
		   }
	th,td{
		padding:15px;
		text-align:left;
	     }
	th{
		text-align:left;
	  }

	table{
	     	border-spacing: 15px;
	     }

	table#t01 tr: nth-child(even){
					background-color: #eee;
					}

	table#t01 tr: nth-child(odd){
					background-color: #fff;
					}
	
	table#t01 th{
			width: 100%;
			background-color: #f1f1c1;
		 }

</style>
	
	<body>
	<table style="width:100%">
	<caption>Employee Details</caption>
	<th>
	<form>
	<fieldset>
	<legend><legend>	
       	<table id="t01">
	<tr>
		<th>NAME</th>
		<th>EMAIL-ID</th>
		<th>MOBILE-NO</th>
		<th>USERNAME</th>
		<th>SALARY</th>
		<th>AGE</th>
	</tr>
	<?php
	while($row12=pg_fetch_array($result12))
	{
	?>
		<tr>	
		<td><?php echo $row12['emp_name']?></td>
		<td><?php echo $row12['emp_email']?></td>
		<td><?php echo $row12['emp_mob']?></td>
		<td><?php echo $row12['emp_username']?></td>
		<td><?php echo $row12['emp_salary']?></td>
		<td><?php echo $row12['emp_age']?></td>
		</tr>	
	<?php
	}
break;
	?>	
		
</fieldset>
	</form>
</table>
</body>
</html>
<?php
	}
		else
		//echo "customer";
		$query1="select * from cust";
	//echo $query1;
	$result12=pg_query($conn,$query1);
	?>
	<html>
	<body>
	<table style="width:100%">
	<caption>CUSTOMER Details</caption>
	<th>
	<form>
	<fieldset>
	<legend><legend>	
       	<table id="t01">
	<tr>
		<th>USERNAME</th>
		<th>NAME</th>
		<th>MOBILE-NO</th>
		<th>EMAIL</th>
		<th>FEEDBACK</th>
		<th>SOURCE_ADD</th>	
	</tr>
	<?php
	while($row12=pg_fetch_array($result12))
	{
		// cust_username | cust_name |  cust_mob  |         cust_email         | cust_pass | cust_feedback | cust_source_addr 

	?>
	

		<tr>	
		 <td><?php echo $row12['cust_username']?></td>
		<td><?php echo $row12['cust_name']?></td>
		<td><?php echo $row12['cust_mob']?></td>
		<td><?php echo $row12['cust_email']?></td>
		<td><?php echo $row12['cust_feedback']?></td>
		<td><?php echo $row12['cust_source_addr']?></td>
		</tr>	
	<?php
		}
	?>	
		
</fieldset>
	</form>
</table>
</body>
</html>
<?php
	}		
}	
}?>
