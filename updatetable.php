<?php
include('confi.php');
	$na="pkuniversity";
$sql="update employee set name='$na' where id=1";
	if(mysqli_query($link,$sql))
	{
		echo "updated";
	}
 	else
 	{
		echo "error";
		}?>
