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
	$sql="select * from employees";
		if($res=mysqli_query($con,$sql))
		{
			if(mysqli_num_rows($res)>0)
			{
				echo "<table>";
				echo "<tr>";
				echo "<th>first name </th>";
				echo "<th>lastname</th>";
				echo "<th>AGE</th>";
				echo "<tr>";
				while($row=mysqli_fetch_array($res))
				{
						echo "<tr>";
						echo "<td>".$row['firstname']."</td>";
					
						echo "<td>".$row['lastname']."</td>";
					
						echo "<td>".$row['age']."</td>";
						echo "</tr>";
				}
				echo "</table>";
				

			}
			else
			{
				echo "no matching records found";
			}
			
		}
		else
			{
				echo "eror :could able to execute $sql.".mysqli_error($con);
			}
		mysqli_close($con);
?>
