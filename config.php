<?php
$hs="localhost";
$us="pavan";
$pa="root";
$db="2016cse387";
$link=mysqli_connect($hs,$us,$pa,$db)or die ("no coonection");
mysqli_select_db($link,$db)or die ("no coonection");?>
