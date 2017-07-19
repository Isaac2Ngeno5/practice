<?php 
//this are variables for the form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$hours = $_POST['hours'];
$id = $_POST['number'];
$cat = $_POST['category'];

//use switch statement for the three scenario

switch ($cat) {
    case "A":
    	$gross_pay = $hours * 100 + 10000;
    	
    		if ($gross_pay < 10000) {
    			$tax = $gross_pay * 10/100;
    		}elseif ($gross_pay < 20000 && $gross_pay > 10000 ) {
    			$tax = $gross_pay * 15/100;
    		}elseif ($gross_pay < 30000 && $gross_pay > 20000) {
    			$tax = $gross_pay * 20/100;
    		}elseif($gross_pay > 30000){
    			$tax = $gross_pay * 30/100;
    		}else{
    			echo "not applicable";
    		}

    	$net_pay = $gross_pay - $tax;
        
        break;
    case "B":
    		$gross_pay = $hours * 200 ;
    	
    		if ($gross_pay < 10000) {
    			$tax = $gross_pay * 10/100;
    		}elseif ($gross_pay < 20000 && $gross_pay > 10000 ) {
    			$tax = $gross_pay * 15/100;
    		}elseif ($gross_pay < 30000 && $gross_pay > 20000) {
    			$tax = $gross_pay * 20/100;
    		}elseif($gross_pay > 30000){
    			$tax = $gross_pay * 30/100;
    		}else{
    			echo "not applicable";
    		}

    	$net_pay = $gross_pay - $tax;
        
    
        
        break;
    case "C":
        	$gross_pay = $hours * 500;
    	
    		if ($gross_pay < 10000) {
    			$tax = $gross_pay * 10/100;
    		}elseif ($gross_pay < 20000 && $gross_pay > 10000 ) {
    			$tax = $gross_pay * 15/100;
    		}elseif ($gross_pay < 30000 && $gross_pay > 20000) {
    			$tax = $gross_pay * 20/100;
    		}elseif($gross_pay > 30000){
    			$tax = $gross_pay * 30/100;
    		}else{
    			echo "not applicable";
    		}

    	$net_pay = $gross_pay - $tax;
        
        break;
    default:
        echo "please select category of employee";
}

 ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css"> 
  <style type="text/css">
    body{background-color: #111;}
    #container{
        height: 500px;
        width:60%;
        background-color: #303030;
        padding:20px;
    }
    #table{
    width: 80%;
    margin:20px auto;
    color:#0033ff;
    
    
}
h1{color:#fff;text-align: center;}
  </style>
}
}
</head>
<body>

<div class="container" id="container">
            <h1>Table for employee income</h1>
 <table class="table table-hover" id="table">

            <tr>
                <td>Firstname</td>
                <td><?php echo $fname;?></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td><?php echo $lname;?></td>
            </tr>
            <tr>
                <td>Hours worked</td>
                <td><?php echo $hours;?></td>
            </tr>
            <tr>
                <td>Employee category</td>
                <td><?php echo $cat;?></td>
            </tr>
            <tr>
                <td>Employee ID</td>
                <td><?php echo $id;?></td>
            </tr>
            <tr>
                <td>gross pay</td>
                <td><?php echo $gross_pay;?></td>
            </tr>
            <tr>
                <td>tax</td>
                <td><?php echo $tax;?></td>
            </tr>
            <tr>
                <td>net pay</td>
                <td><?php echo $net_pay;?></td>
            </tr>
        </table>
    </div>
        <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>