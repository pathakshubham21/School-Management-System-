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
	<title></title>
	<script type="text/javascript">
		function fun1()
		{
          if(document.frm.sel.value=="Fullstack")
          {
          	document.frm.fee.value="12000 $";
          }
          if(document.frm.sel.value=="Big Data")
          {
          	document.frm.fee.value="11500 $";
          }
          if(document.frm.sel.value=="Python")
          {
          	document.frm.fee.value="15000 $";
          }
		}
	</script>
</head>
<body style="background-color:#fed8b1">
		<div style="height: 80px; background-color: brown;">
			<img align="center"  src="11.jpg"style="margin-left: 20px;margin-top:20px;"  width="80" height="50" >
			<input type="button" value="Home" onclick="window.location.href='main page.php'"  style="color: white; border-radius: 5%; float:right; background-color:#ffbd31; color: black; height: 30px;width: 200px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 30px;margin-right: 30px;">

		

	</div>
	<div style="position: absolute;margin-left: 100px;margin-top: 200px;">
		<h1>Online Accounts Include<br>
12 Months of Free Tier Access
</h1>
	<p>Including use of Punjab Board EC2, Punjab Board S3, and APunjab Boar DynamoDB<br>
Visit education.Punjab Board.com/free for full offer terms.
</p>
	</div>
	<div style="margin-left: 350px;">
	<h3 align="center">Create student Account</h3>
	
<form action="check1.php" method="post" name="frm" enctype="multipath/form-data">
	<table align="center" style="background-color:white; width: 500px; margin-top:-20px; border-radius: 5%;">
		<tr>
			<td>
					<img align="center"  src="login.png"style=" border-radius: 30%; margin-left: 170px;px;margin-top:0px;"  width="160" height="120" >
					<br>
			</td>
		</tr>
		<tr>
			<td align="center">    	<br>	<br>
			Username:    <input type="email" name="un" placeholder="Enter the Email..." style="height: 40px; width: 220px; border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;">
				<br>
			</td>
		</tr>
		<tr>
			<td align="center">
					<br>
				Password  :
			
				<input type="password" name="pw1" placeholder="Enter the Password..."  style="height: 40px; width:220px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;">
					<br>
			</td>
		</tr>
			<tr>
			<td align="center">
					<br>
				Confirm   ::
				<input type="password" name="pw2" placeholder="Enter the Password..."  style="height: 40px; width:220px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px; margin-left: 5px;">
					<br>
			</td>
		</tr>
		<tr>
			<td align="center">
             <br>
				<div style="margin-right: 20px;">
					Course:
					<select name="sel" onchange="fun1();" style="width: 200px;height: 30px; margin-left: 20px;">
					<option>...Select...</option>
					<option value="Fullstack">Fullstack</option>
					<option value="Big Data">Big Data</option>
					<option value="Python">Python</option>
				</select>
				</dir>

			</td>
		</tr>
		<tr>
			<td align="center">
					<br>
				Fee  :   :
				<input type="text" readonly="true" name="fee" placeholder="Course Fee..."  style="height: 40px; width:220px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;">
			
					<br>
			</td>
		</tr>
			<tr>
			<td align="center">
					<br>
				Name:
		<input type="text" name="name" placeholder="Enter the Name..."  style="height: 40px; width:220px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;  margin-left: 30px;">
			<br>
			
			Profile Photo:<input style="margin-right: -100px;" type="file" value="Upload Image" name="pic">

			</td>
		</tr>
		<tr align="center">
			<td align="center">	<br>	<br>
					<input type="submit" value="Sign Up"  style="color: black; border-radius: 7%; background-color:#ffbd31; height: 30px;width: 150px; border: solid 1px #c2c4c6; font-size:16px; padding-left:15px;margin-bottom: 10px;">
			</td>
			
		</tr>

		
			<br>
	</table>
</form>
</div>
<vr>
	<br>
	<center><p>© 2019 Punjab Education Board School, Inc. or its affiliates.<br>
All rights reserved.</p></center>
</body>
</html>