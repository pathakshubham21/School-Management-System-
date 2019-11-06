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
<body style="background-color:#fed8b1">
	<div style="height: 110px; background-color: brown;">
			<img align="center"  src="11.jpg"style="margin-left: 20px;margin-top:20px;"  width="80" height="50" >

			<input type="button" value="Logout" onclick="window.location.href='main page.php'"  style="color: white; border-radius: 5%; float:right; background-color:brown; color: black; height: 30px;width: 100px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 40px;margin-right: 30px;">

				<p style="color: white;float: right; margin-right: -100px;margin-top: 10px;">
					Welcome pathakshubham1228@gmail.com</p>

	</div>


<div class="container" style="margin-top: 50px;">
	<div class="col-md-8">
		<h1>Student Data</h1>


<?php
session_start();
$con=mysqli_connect("localhost","root","","fullstack");
if(!$con)
	die("Server could not connected");

$sqldata="select * from asw ";
$rs=mysqli_query($con,$sqldata);
	while($value=mysqli_fetch_assoc($rs))
	{
		?>
	

<ul class="list-group">
  <li style="background-color: lightgreen;" class="list-group-item"><b><i class="glyphicon glyphicon-user"></i>Username: </b> <?php echo $value["Username"] ?></li>
   <li style="background-color: lightgreen;" class="list-group-item"> <b> Name : </b> <?php echo $value["Name"] ?></li>
       <li style="background-color: lightgreen;" class="list-group-item"> <b> Course : </b> <?php echo $value["Course"] ?></li>
    <li style="background-color: lightgreen;" class="list-group-item"> <b> Course Fee : </b> <?php echo $value["Price"] ?></li>
     <li style="background-color: lightgreen;" class="list-group-item"> <b> Total Attempt Test  : </b> <?php echo $value["Test"] ?></li>
      <li style="background-color: lightgreen;" class="list-group-item"> <b> Result : </b> <?php echo $value["Result"] ?></li>

</ul>
<?php
}
?>
</div>
</div>
<br>
<br>
<center><p style="color: blue;">© 2019 Punjab Education Board School , Inc. or its affiliates.<br>
All rights reserved.</p></center>

</body>
</html>