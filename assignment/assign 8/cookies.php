<?php
/**
 * Created by PhpStorm.
 * User: Isaac
 * Date: 7/8/2017
 * Time: 6:16 PM
 */

/** @var TYPE_NAME $input1 */
$input1 = $_POST['samoas'];
$input2 = $_POST['thinmints'];
$input3 = $_POST['donation'];
$input4 = $_POST['shipping'];

$input3 = 5;

 switch ($input4){
     case "regular":
         $input4 = 7;
         $total = ($input1*3.50) + ($input2*4.00) + $input3 + $input4;
         break;
     case "express":
         $input4 = 9;
         $total = ($input1*3.50) + ($input2*4.00) + $input3 + $input4;
         break;
 }

 
 echo "<h1> Your order :</h1>";


for($i=1;$i<=$input1;$i++){
	echo '<img src="img/sam.png" width="100px" height="100px">';
}
for($j=1;$j<=$input2;$j++){
	echo '<img src="img/thin.jpg" width="100px" height="100px">';
}
 echo "</br>Total order cost: $".$total ."</br>";
 echo "Thank you for your donation!";
 ?>