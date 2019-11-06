<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body  style="background-color:#fed8b1">

<?php
session_start();
$con=mysqli_connect("localhost","root","","fullstack");
if(!$con)
	die("Server could not connected");

$sqldata="select * from asw where Username='".$_SESSION["user"]."'";
$rs=mysqli_query($con,$sqldata);
	$value=mysqli_fetch_assoc($rs);
	?>
<div style="height: 80px; background-color: brown;">
			<img align="center"  src="11.jpg"style="margin-left: 20px;margin-top:20px;"  width="80" height="50" >

			<input type="button" value="Logout" onclick="window.location.href='main page.php'"  style="color: white; border-radius: 5%; float:right; background-color:#ffbd31; color: black; height: 30px;width: 100px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 40px;margin-right: 30px;">

				<p style="color: white;float: right; margin-right: -100px;margin-top: 10px;">
					Welcome 
				<?php
				echo $_SESSION["user"];
				
				?></p>

	</div>
	<div style="height: 80px; background-color: #eeeeff;margin-top: 30px;">
		<spna>
		<h1 style="margin-left: 30px;margin-top: -20px;"> View : </h1>
		<h2 style="margin-left:130px;color: red; margin-top: -48px;"><?php echo $value["Name"]; ?> </h2>
		</spna>
		
	</div>

		<img style="margin-top: 50px; margin-left: 20px; border-radius: 5px;" src="<?php echo $value['Photo'];?>" height="120" width="100">
		<p style="margin-left: 20px; margin-top: -0px;"><?php echo $value['Name'];?></p>
	
	<div style="position: absolute;left:350px;top:225px; height: 300px;width: 600px; border-radius: 10px; background-color: #ffc512" >
		<h2 style="color: green; text-align: center; font-size: "> Test Instruction </h2>
		<h3 style="color: green; margin-left: 210px; "> Total No Question : 6 </h3>
			<h3 style="color: green; margin-left: 210px;">Total Given Time : 10 min </h3>
			<h3 style="color: green; margin-left: 210px;">Total Marks : 10  </h3>
				<h3 style="color: green; margin-left: 210px;">Passing Marks : 60%  </h3>
			<center>
			<button style="margin-top: 7px; color: black;" onclick="window.location.href='Exam.php'" type="button" class="btn btn-success">Start Quiz</button>

			<br>
			<br>
			<br>
			<p>© 2019 Amazon Web Services, Inc. or its affiliates.
All rights reserved.</p>
</center>

	</div>


</body>
</html>