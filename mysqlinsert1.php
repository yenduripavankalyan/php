<?php
	$sname="localhost";
	$uname="pavan";
	$password="root";
	$dbname="2016cse387";
	$con=mysqli_connect("localhost","pavan","root","2016cse387");
	if(!$con)
	{
		die("connection falied:".mysqli_connect_error());
	}
	$sql="insert into employees(firstname,lastname,age) values('dhanush','satya','19')";
		if(mysqli_query($con,$sql))
		{
			 echo " insert sucessfully";
			
			
		}
		else
			{
				echo "eror :could able to execute $sql.".mysqli_error($con);
			}
		mysqli_close($con);
?>
