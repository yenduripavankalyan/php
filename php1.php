<html>
<style>

</style>
<body>
<center>
<?php echo "hello pavan";?>
<?php $x=5;
$y=15;
	function f1()
		{
			global $x,$y;
			$y=$x+$y;
		}

		f1();
		echo"sum of x and y is :$y";?>

</center>
</body>
</html>
