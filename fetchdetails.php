<?php
include('config.php');
$sql="select * from employee";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
	{
		$id=$row['id'];
		$name=$row['name'];
		$salary=$row['salary'];
		$addresss=$row['address'];
		echo "id:".$id." "."Name :".$name." "."salary".$salary." "."address:".$address;
		echo "<br>";	
	}?>
