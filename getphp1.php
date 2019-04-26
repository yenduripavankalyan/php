<?php
   if( $_POST["name"] || $_POST["age"] ) {
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
	echo "gender is  ". $_POST['gender']. "<br />";
	      echo "my  ". $_POST['fn']. "<br />";
      echo "my mother name is ". $_POST['mn']. " years old.";
      
      exit();
   }
?>

