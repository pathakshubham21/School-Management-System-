<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #fed8b1">

</body>
</html>
<?php
session_start();
$con=mysqli_connect("localhost","root","","fullstack");
if(!$con)
	die("Server could not connected");

$sqldata="select * from asw where Username='".$_SESSION["user"]."'";
$rs=mysqli_query($con,$sqldata);
	$value=mysqli_fetch_assoc($rs);
	?>
<div style="height: 150px; background-color: brown;">
			<img align="center"  src="11.jpg"style="margin-left: 20px;margin-top:20px; border-radius: 10%;"  width="150" height="100" >


			<input type="button" value="Logout" onclick="window.location.href='main page.php'"  style="color: white; border-radius: 5%; float:right; background-color:#ffbd31; color: black; height: 30px;width: 100px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 40px;margin-right: 30px;">

				<p style="color: white;float: right; margin-right: -100px;margin-top: 10px;">
					Welcome 
				<?php
				echo $_SESSION["user"];
				
				?></p>
		

	</div>
	<style type="text/css">
  ul li
{
list-style-type:none;
display:inline-block;
text-decoration:none;
margin-top: 15px;
}
ul li a{

color:black;
padding:100px;
color: black;

}
	</style>
	<div style="background-color: #edf1fe; height: 50px;">
		<ul>
			<li><a href="test.php"><b>Take Quiz</b></a></li>
				<li><a href="new.php"><b>View Tutorial</b></a></li>
					<li><a href="#"><b>Change Data</b></a></li>
		
	</div>
	<div style="margin-left: 50px;">
		<br>
		<br>


	<img src="<?php echo $value['Photo']; ?>" width="100" height="100" border="2" style="border-radius: 30%;" >
	<br>
	<?php
	echo "<br><b>Name: </b>".$value["Name"]."<br> <b>Course Name: </b>".$value["Course"]."<br> "."<b>Username: </b>".$value["Username"];
	
	?>

</div>
	<?php
           echo "<br>
           <br><br>";
		if($value["Course"]=="Fullstack")
			include 'full.php';
		else if($value["Course"]=="Big Data")
				include 'big.php';
		else if($value["Course"]=="Python")
			include 'python.php';
		?>
<div style="background-color: #e5e8f2; height: 200px;width: 500px;position: absolute;top: 240px;left:500px; border-radius: 5%;">

	<h3 style="margin-left: 30px; color: green">Total Test Attempt : <?php echo $value["Test"]; ?></h3>

	<h3 style="margin-left: 30px; color: green;">Last Test Score : <?php echo $value["Result"]; ?></h3>
	<h3 style="margin-left: 30px; color: green;">Student Course Name : <?php echo $value["Course"]; ?></h3>
		<h3 style="margin-left: 30px; color: green;">Profile Complete:</h3>
	
	<div style="width: 200px; position: absolute;top:160px;left:250px; background-color: #e7feff;" class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $value["Result"]; ?>;">
<?php echo $value["Result"]; ?>
  </div>
</div>
</div>
