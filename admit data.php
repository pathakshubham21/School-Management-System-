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
	<script type="text/javascript">
		function f1()
		{
			alert("Under Process this Module thank You :)");
		}
		function fun1()
		{
			 document.frm.insta.width="45";

		}
			function fun11()
		{
			 document.frm.fb.height="45";

		}
			function fun111()
		{
			 document.frm.linkdin.height="45";

		}
		function fun2()
		{
			 document.frm.insta.width="35";

		}
	</script>
</head>
<body style="background-color:#fed8b1">
<form name="frm">
<div style="height: 130px; background-color: brown;">
			<img align="center"  src="11.jpg"style="margin-left: 20px;margin-top:20px; border-radius: 10%;"  width="110" height="110" >
			<input type="button" value="Log Out" onclick="window.location.href='admin login.php'"  style="color: white; border-radius: 5%; float:right; background-color:#ffbd31; color: black; height: 30px;width: 100px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 30px;margin-right: 30px;">

	</div>
	<div  style="background-color: #a4f4f9;width: 200px;height: 400px; margin-top: 10px;">
		<div style="margin-left: 40px;">
		<img border="2"  src="admin.jpg" style="border-radius: 50px; width: 100px;height: 100px;margin-top: 10px; border-color: pink;">
		<p style="margin-left:-20px;font-size: 15px;">Hello <b>Subham Pathak</b></p>
	</div>
	<a href="https://www.instagram.com/pathakshubham21/">
	<img src="insta.png" style="border-radius: 5%; width: 35px;height: 35px;margin-top: 0px;margin-left: 15px;" onmouseover="fun1();" onmouseout="fun2();" name="insta"></a>
	<a href="https://www.facebook.com/Shubham.Pathak1252 ">
	<img src="fb.png" style="border-radius: 5%; width: 35px;height: 35px;margin-top: 0px;margin-left: 15px;" onmouseover="fun11();" onmouseout="fun2();" name="fb"></a>
		<a href="https://www.linkedin.com/in/shubham-pathak-b84532170/">
			<img src="linkdin.png" style="border-radius: 5%; width: 35px;height: 35px;margin-top: 0px;margin-left: 15px; " onmouseover="fun111();" onmouseout="fun2();" name="linkdin">
		</a>
		<h3  style="margin-left: 60px;">About</h3>
		<div style="margin-left: 20px;font-size: 13px;">
			<p>Computer Science Engineering<br> Lovely Professional University<br>Jalandhar(Punjab)..<br> © 2019 @shubham Pathak<br>| aquaman96@gmail.com |
		</div>
	</div>
	<h3 style="margin-top: -350px;margin-left:700px;"> Admin Controls </h3>
<button  style="position: absolute;left:350px;top:250px; width: 900px;" type="button" onclick="window.location.href='admin show data.php'" class="btn btn-success btn-lg btn-block" >View Student Data</button>
<button  style="position: absolute;left:350px;top:350px;width: 900px;" type="button" onclick="window.location.href='admin admit.php'" class="btn btn-success btn-lg btn-block">Admit Student / Suspend Student</button> 
<button  style="position: absolute;left:350px;top:450px;width: 900px;" type="button" onclick="window.location.href='admin exam.php'"  class="btn btn-success btn-lg btn-block">View Test Details</button>
<button  style="position: absolute;left:350px;top:550px;width: 900px;" type="button" onclick="f1();"  class="btn btn-success btn-lg btn-block">Add Question / Remove Question</button>
<br>
<br>
<p style="margin-top: 370px;margin-left: 500px;">
	Privacy Statement | Terms of Use | © 2019 Punjab Education Board School. All Rights Reserved<br>Doveloper | @shubham Pathak | Toll Free +91 1800 00 5212 |</p><br><br><br>

</form>
</body>
</html>