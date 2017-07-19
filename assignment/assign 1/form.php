<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
 		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 		<style type="text/css">
 			body{background-image: url(img/pinky.png);}
 			#form{
				margin:20px auto;
				width:60%;
				background-color: rgba(254, 252, 253, 0.5);
				padding:50px;
			}

			form input{width:40%;}
 		</style>
	</head>
	<body>

	<div class="container" id="form">
		<form action="view.php" method="post" class="form-horizontal " role="form">
		   <div class="form-group">
			<label class="control-label col-sm-2">First Name</label><br>
			<input type="text" name="fname" placeholder="enter your first name" reguired>
		   </div>
		   <div class="form-group">
			<label class="control-label col-sm-2">Last Name</label><br>
			<input type="text" name="lname" placeholder="enter your last name" reguired>
		   </div>
		   <div class="form-group">
			<label class="control-label col-sm-2">Employee ID</label><br>
			<input type="number" name="number" placeholder="enter your employee ID" reguired>
		   </div>
		   <div class="form-group">
			<label class="control-label col-sm-2">Number of Hours worked</label><br>
			<input type="number" name="hours" placeholder="enter hours worked" reguired>
		   </div>
		   <div class="select">
			<label class="control-label col-sm-2">Category of Employee</label><br>
			<select name="category">
				<option value="A" selected>A</option>
				<option value="B">B</option>
				<option value="C">C</option>
			</select><br>
			</div>
			<br><br>
			<input type="submit" class="btn btn-default" value="calculate">
			
		</form>
	</div>
		<script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>