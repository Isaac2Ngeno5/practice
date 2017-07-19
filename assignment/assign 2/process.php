<?php
$num=$_POST['numb'];
$sum = 0;
 for ($i=0; $i <$num ; $i++) { 
 	$sum +=$i;
 	echo "$sum"."<br>";
 }
?>