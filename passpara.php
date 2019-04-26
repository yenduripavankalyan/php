<?php 
	function f1(&$num)
		{
			$num=$num+5;
			echo "VALUE of NUM  in f1is $num"."<br>";
		}
		function f2(&$num)
		{
				$num=$num+10;
			echo "VALUE of NUM in f2 is $num"."<br>";
		}
		$p=10;
		f1($p);
		echo "original of p is $p"."<br>";
		f2($p);
		echo "original of p is $p"."<br>";?>
