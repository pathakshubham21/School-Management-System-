<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		
		function fun2()
		{
			document.f.username.value=document.f.password.value="";
		}
		function show()
		{
			document.f.password.type="text";
			document.f.o.value="Hide Password";
					
		}
		function hide()
		{
			document.f.password.type="password";
	        	document.f.o.value="Show Password";
		}
		function check()
		{
			if(document.f.un.value=="pathakshubham1228@gmail.com" && document.f.pw.value=="aS@1pm")
			{
				window.location.href="admit data.php";
			}
			else
			alert("Worng Username or Password");
		}
		

	</script>
</head>
<body style="background-color:#fed8b1">
		<div style="height: 130px; background-color: brown;">
			<img align="center"  src="11.jpg"style="margin-left: 20px;margin-top:20px; border-radius: 10%;"  width="110" height="110" >
			<input type="button" value="Home" onclick="window.location.href='main page.php'"  style="color: white; border-radius: 5%; float:right; background-color:brown; color: black; height: 30px;width: 100px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 30px;margin-right: 30px;">

		

	</div>
<h3 align="center"> School Admin Login</h3>
	
<form name="f">
	<table align="center" style="background-color:#965538; width: 500px;height: 200px; border-radius: 20px;">
		<tr align="center">
			<td>
				<br>
				<img src="gf.png" width="99" height="99" style="border-radius: 50%;">
			</td>
		</tr>
		<tr align=center>
			<td>
<p style="margin-left:-100px;margin-bottom:0px;"> Enter Email or Phone Number*</p>
				
	                        
				<input type="email" name="un" placeholder="Enter the Email..." style="height: 40px; width: 270px; border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;">
				<br>
			</td>
		</tr>
		<tr align=center>
			<td>

				
				<p style="margin-left:-230px;margin-bottom:0px;">Password*</p>
				<input type="password" name="pw" placeholder="Enter the Password..."  style="height: 40px; width:270px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;"><br>
				<a href="https://support.google.com/?hl=en" style="text-decoration: none; color:#1974d2;margin-left: 160px;margin-top: 5px;">Need Help?</a>
			</td>
		</tr>
		<tr align=center>
			<td>
			<br>
				<input type="button" value="Show Password"  onclick="show();" ondblclick="hide();" name="o"  style="color: black; border-radius: 7%; background-color:brown; height: 30px;width: 150px; border: solid 1px #c2c4c6; font-size:16px; padding-left:15px;">
			</td>
		</tr>
		<tr align=center >
			<td>
			
				<input type="button" value="Sign In" onclick="check();"  style="color: black; border-radius: 7%;background-color: brown; height: 30px;width: 150px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px; margin: 20px;">
		
				<input type="button" value="Cancle" onclick="fun2();"  style="color: black; border-radius: 7%;background-color:brown; height: 30px;width: 150px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;">
				<br>
				<p>© 2019 Punjab Education Board School, Inc. or its affiliates.<br>
All rights reserved.</p>
			</td>
		</tr>
	</table>
</form>
<br>
<br>
<br>
</body>
</html>