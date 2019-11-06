<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="name.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
		

	</script>
	<style type="text/css">
  .btn {
    float: right;
  border: 2px solid black;
  background-color: brown;
  color: black;
  padding: 8px 10px;
  font-size: 15px;
  cursor: pointer;
}

  blink {
  -webkit-animation: 2s linear infinite condemned_blink_effect; // for Safari 4.0 - 8.0
  animation: 2s linear infinite condemned_blink_effect;
  color: brown;
}
@-webkit-keyframes condemned_blink_effect { // for Safari 4.0 - 8.0
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;

  }
}
@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
</style>
</head>
<body style="background-color:#fed8b1">
<div class="container">
<br>
   <div class="container">
        <div class="row">
      
        <div class="col-md-3"><br>

          <img src="11.jpg" height="150" width="150" style="border-radius: 10%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

</div>
          <div class="col-md-7">
             <h1 style="color: brown; "><b>Punjab School Education Board</b></h1>
             <h1 style="color: brown; ">ਪੰਜਾਬ ਸਕੂਲ ਸਿੱਖਿਆ ਬੋਰਡ</h1>
            <hr> <p>Vidya Bhawan, Phase-8, Sector 62, Sahibzada Ajit Singh Nagar, Punjab 160062</p>
              


        </div>
           <div class="col-md-2">
            <div style="margin-top: 30px;color: brown;margin-left: 20px;">
        
           
           <blink>    <b> <p>HELPLINE</p>
             <p>0172 5227423,424,425</p></b></blink>
            <button class="btn success" onclick="window.location.href='reg.php'"><b>Register</b></button>
           </div>

</div>
      </div>
   
</div>
<br>
<br>

<div id="main">
<nav style="background-color:brown;" >

<ul style="float: left;">
	<li>
<a style="text-decoration: none;" href="main page.php" style="font-size:15px"><b>Home</b></a>
</li>
<li>
<a style="text-decoration: none;" href="bus.php" style="font-size:15px"><b>Bus Route</b></a>
</li>
<li>
<a style="text-decoration: none;" href="timetable.html" style="font-size:15px"><b>Time Table</b></a></li>
<li>
<a style="text-decoration: none;" href="http://www.pseb.ac.in/academic" style="font-size:15px;"><b> Academic</b></a></li>
<li>
<a style="text-decoration: none;" href="bus.php" style="font-size:15px;"><b>Photo Gallery</b></a></li><li>
<a style="text-decoration: none;" href="http://punjab.indiaresults.com/pseb/default.aspx" style="font-size:15px"><b> Result</b></a></li>
<li>
<a style="text-decoration: none;" href="http://www.pseb.ac.in/contact-us" style="font-size:15px"><b> Contact Us</b></a></li>
<li>
<a style="text-decoration: none;" href="http://www.pseb.ac.in/#" style="font-size:15px"><b> FAQs</b></a></li>
</ul>
</nav>
<div class="container" >
	<div class="row">
		<div class="col-md-6" >
			 <div style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="w3-content w3-section" >
  <img class="mySlides" src="l5.jpg" style="width:100%;height: 400px; border-radius: 5%;">
  <img class="mySlides" src="l2.jpg" style="width:100%;height: 400px;border-radius: 5%;">
  <img class="mySlides" src="l3.jpg" style="width:100%;height: 400px;border-radius: 5%;">
  <img class="mySlides" src="l4.jpg" style="width:100%;height: 400px;border-radius: 5%;">
  <img class="mySlides" src="l1.jpg" style="width:100%;height: 400px;border-radius: 5%;">
  <img class="mySlides" src="l77.jpg" style="width:100%;height: 400px;border-radius: 5%;">
</div>
<br><br>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
		</div>
	<div class="col-md-6">
<form name="f" action="check.php" method="post">
	<table align="center" style="background-color:#965538; width: 500px;height: 200px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<tr align="center">
			<td>
				<br>
				<img src="gf.png" width="99" height="99" style="border-radius: 50%;">
			</td>
		</tr>
		<tr align=center>
			<td>
<p style="margin-left:-100px;margin-bottom:0px;color: white;"> Enter Email or Phone Number*</p>
				
	                        
				<input type="email" name="un" placeholder="Enter the Email..." style="height: 40px; width: 270px; border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;">
				<br>
			</td>
		</tr>
		<tr align=center>
			<td>

				
				<p style="margin-left:-230px;margin-bottom:0px;color: white;">Password*</p>
				<input type="password" name="pw" placeholder="Enter the Password..."  style="height: 40px; width:270px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;"><br>
				<a href="https://support.google.com/?hl=en" style="text-decoration: none; color:white;margin-left: 160px;margin-top: 5px;">Need Help?</a>
			</td>
		</tr>
		<tr align=center>
			<td>
			<br>
				<input type="button" value="Show Password"  onclick="show();" ondblclick="hide();" name="o"  style="color: black; border-radius: 7%; background-color:orange; height: 30px;width: 150px; border: solid 1px #c2c4c6; font-size:16px; padding-left:15px;">
			</td>
		</tr>
		<tr align=center >
			<td>
			
				<input type="submit" value="Sign In"  style="color: black; border-radius: 7%;background-color: orange; height: 30px;width: 150px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px; margin: 20px;">
		
				<input type="button" value="Cancel" onclick="fun2();"  style="color: black; border-radius: 7%;background-color:orange; height: 30px;width: 150px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;">
				<br>
				<p>© 2019
Punjab School Education Board, Inc. or its affiliates.<br>
All rights reserved.</p>
			</td>
		</tr>
	</table>
</form></div></div>
</div>
<br>
<br>
<br>
<div class="container">
	<div class="row">
<div class="col-md-12">
	<p>

Punjab School Education Board (abbreviated P.S.E.B.) is a school board based in Mohali, Chandigarh, India. It was founded in 1969 under a legislative act of the Government of Punjab to administer the curriculum taught in public schools in the Punjab state and conduct standardized examinations in addition to conducting administration of scholarships, and publishing of textbooks. The headquarters of the Board are located in SAS Nagar (Mohali), near Chandigarh.
<br>
<br>

The Board is headed by a full-time Chairman whose term lasts three years and who technically reports to the Secretary of School Education in the Government of Punjab.The current Education Secretary of the board is IAS Sh. Krishan Kumar who is sincerely committed to shape the education system of punjab by his pioneering Initiatives like 'Padho Punjab'.



	</p></div></div>
	<div class="col-md-12">
		<hr>
	<p>	
PSEB Vidya Bhawan, Phase-8, S.A.S Nagar (Mohali)-160062   |   Phone No. 0172 5227423,424,425   |   Email ID : punjabschool@gmail.com</p>
<hr>
	</div>
		<div class="row">
<div class="col-md-12">
	<br>	<br>	<br>	<br>
	<div style="height: 50px; background-color:#363737;color: white;">
    <br>
   <p align="center">Privacy Statement | Terms of Use | © 2019 Lovely Professional University. All Rights Reserved.</p>
   	<br>	<br>	<br>	<br>	<br>
   </div>


















	</div></div>
</body>
</html>