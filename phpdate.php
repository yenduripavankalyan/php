<?php
	$d=Date("D");
	$m=Date("M");
	$y=Date("Y");
	echo $d ,$m,$y;
	if($d=="")
		{
			echo "we are in 2019";
		} elseif($d=="Sun"){
				echo "today is sunday";

		} else{
			echo "have a nice day";}?>
