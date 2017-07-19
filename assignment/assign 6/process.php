<?php


/*/for ($i=1; $i < $num ; $i++) { 
	//$factorial = $factorial * $i;

	//echo "$factorial"."<br>";

	f
}*/
$n = $_POST['numb'];
$factorial = 1;
function fact($n){
	global $factorial;
	if ($n==1) {
		echo $factorial;
	}else{
		$factorial *= $n;
		fact($n-1);
	}
}

fact($n);


?>