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
<style>
	.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 5%;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

</style>
</head>
<body style="background-color:#fed8b1">
	<div style="height: 80px; background-color: brown;">
			<img align="center"  src="11.jpg"style="margin-left: 20px;margin-top:20px;"  width="80" height="50" >

			<input type="button" value="Logout" onclick="window.location.href='main page.php'"  style="color: white; border-radius: 5%; float:right; background-color:#ffbd31; color: black; height: 30px;width: 100px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 40px;margin-right: 30px;">

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
  <li style="background-color: lightgreen;" class="list-group-item"><i class="glyphicon glyphicon-user"></i><b>Username: </b> <?php echo $value["Username"] ?></li>
     <li style="background-color: lightgreen;" class="list-group-item"> <b> Name : </b> <?php echo $value["Name"] ?></li>
       <li style="background-color: lightgreen;" class="list-group-item"> <b> Course : </b> <?php echo $value["Course"] ?></li>
    <li style="background-color: lightgreen;" class="list-group-item"> <b> Course Fee : </b> <?php echo $value["Price"] ?></li>
     <li style="background-color: lightgreen;" class="list-group-item"> <b> Total Attempt Test  : </b> <?php echo $value["Test"] ?></li>
      <li style="background-color: lightgreen;" class="list-group-item"> <b> Result : </b> <?php echo $value["Result"] ?></li>

</ul>
<?php
}
?>
<form action="admin del.php" method="post">
<div  style="background-color: skyblue; position: absolute;top:80px;left:800px; width: 400px;height: 250px;border-color: red; border-radius: 10px;">
	
	<h3  style="margin-left: 110px; margin-bottom: -20px;">  Username:</h3>	<input name="un" type="text" style="margin-top: 30px;margin-left: 10px;height: 40px; width: 270px; border: solid 1px #c2c4c6; font-size:16px; padding-left:30px; margin-left: 50px;"  placeholder="Enter Student Username..." >
	<br>
	<br>
	<br>
	<br>
<botton type="button" class="button button2"  onclick="window.location.href='reg.php'"  style=" margin-left: 50px;margin-top: 23px;">Admit</botton>
		
				<button class="button button2" type="submit"   style="  position: absolute;top: 175px;left:200px; border: font-size:16px;">Suspend</button>
</form>
		</div>
		</div>
</div>
<br>
<br>
<center><p style="color: blue;">© 2019 Amazon Web Services, Inc. or its affiliates.<br>
All rights reserved.</p></center>

</body>
</html>


