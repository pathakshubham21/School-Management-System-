<!DOCTYPE html>
<html>

<head>
	<title>Training and Certification </title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- bootstrap code for css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<!-- custom style for the tempelate-->
	<link href="aws.css" rel="stylesheet" type="text/css" >

	<script type="text/javascript">
		
	</script>




</head>



<body class="container-fluid" style="background-color:#fed8b1">

<?php
session_start();
$con=mysqli_connect("localhost","root","","fullstack");
if(!$con)
	die("Server could not connected");

$sqldata="select * from asw where Username='".$_SESSION["user"]."'";
$rs=mysqli_query($con,$sqldata);
	$value=mysqli_fetch_assoc($rs);
	?>
	

	<div class="mt-2" style="height: 80px; background-color: brown;">
			<img align="center"  src="11.jpg"style="margin-left: 20px;margin-top:20px;"  width="80" height="50" >

			<input type="button" value="Logout" onclick="window.location.href='main page.php'"  style="color: white; border-radius: 5%; float:right; background-color:brown; color: black; height: 30px;width: 100px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 40px;margin-right: 30px;">

				<p style="color: white;float: right; margin-right: -100px;margin-top: 10px;">
	</div>
<img src="<?php echo $value['Photo']; ?>" width="250" height="250" border="2" style="border-radius: 10%; position: absolute;top:130px;left:40px;" >
<h3 style="position: absolute;top:400px;left:50px;"><?php echo $value['Name']; ?></h3>

<div class="container-fluid mt-4">

	<div class="row">

		<div class="col-md-5">
		</div>


		<div class="col-md-7 mt-4 " >


			<button onclick=" window.location.href='htm.php'; " type="button" class="btn btn-primary btn-lg btn-block mb-4">HTML</button>
			<button onclick=" window.location.href='css.php'; " type="button" class="btn btn-primary btn-lg btn-block mb-4">CSS</button>
			<button onclick=" window.location.href='jss.php';" type="button" class="btn btn-primary btn-lg btn-block mb-4">JAVA SCRIPT</button>
			<button onclick=" window.location.href='boot.php';" type="button" class="btn btn-primary btn-lg btn-block mb-4">BOOTSTRAP</button>
			<button onclick=" window.location.href='#'; " type="button" class="btn btn-primary btn-lg btn-block mb-4">Big Data</button>
			<button onclick=" window.location.href='#'; " type="button" class="btn btn-primary btn-lg btn-block mb-4">Python</button>
			
		</div>


	</div>
</div>

	


















	<div class="text-muted mt-5">
		<footer style="text-align: center; border-top: 1px solid #e5e5e5;">
			Punjab Education Board 2019-20<sup>&copy;</sup>Project School Manegment System 
		</footer>
	</div>



</body>
</html>






