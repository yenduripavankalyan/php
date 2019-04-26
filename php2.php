<?php 
	function f2()
		{
			 static $x=0;
			
			$x++;
			echo "$x<br>";
		}
			f2();
			f2();
			f2();?>
