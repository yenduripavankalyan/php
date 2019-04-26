<?php
	include('config.php');
$sql="select count(*) as cnt from employee";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
	{
		$cnt=$row['cnt'];
		echo $cnt;
		$sql="insert into employee(id,name,salary,address) values($cnt+1,'pavan')"
	}
$name=$_POST['name'];
$salary=$_POST['salary'];
$address=$_POST['address'];
echo $name."".$salary." ".$address;
$res=mysqli_query($link,"insert into employee(name,salary,address) values('$name','$salary','$address')");
	if(mysqli_query($link,$res))
	{
		echo "inserted successfully";
	}
mysqli_close($link);?>
