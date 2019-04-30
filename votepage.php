<html>
<body>
<CENTER>VOTING PAGE</CENTER>


<?php
include("config.php");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="select cname from insertcandidate";

if ($result=mysqli_query($con,$sql))
  {
		
	$row=mysqli_num_rows($result);
 	while($row>0 )
	{
		 
		echo $row['cname']." "."<input type=radio id=candid>";
		$row=$row-1;
	}

  }

mysqli_close($con);
?> 
<BR>
<BR>
<BR>
