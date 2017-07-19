<?php
$num=$_POST['numb'];
$radio=$_POST['radio'];



switch ($radio) {
	case 'sum':

	$sum=0;
		for ($i=0; $i <$num ; $i++) { 
			$sum +=$i;
			
}
		echo "$sum"."<br>";
		break;

	case 'multiply':

	$multiply=1;
		for ($i=1; $i <$num ; $i++) { 
			$multiply *=$i;
			
}
		echo "$multiply"."<br>";

		break;
	
	
}



?>