

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
<form name="frm">

     <div style="height: 80px; background-color: brown;">
			<img align="center"  src="11.jpg"style="margin-left: 20px;margin-top:20px;"  width="80" height="50" >

			

			


	</div>


<div style="position: absolute;left:950px;top:170px; height: 300px;width: 350px; border-radius: 10px; background-color: #2D4436" >
	<h3 style="color: white; margin-left: 30px;">Total Question : 5</h3>
	<h3 style="color: white;margin-left: 30px;">Total Time       :   10 min</h3>
		<h3 style="color: white;margin-left: 30px;">Total Marks      :   10 </h3>
			<h3 style="color: white;margin-left: 30px;">All Question is Mandratory</h3>
		
	</div>

		<input type="button" value="End Test" onclick="window.location.href='test.php'"  style="border-radius: 5%;  background-color:white; color: black; height: 30px;width: 100px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;position: absolute;left:1075px;top:430px;">

<div class="container" style="margin-top: 50px;">
	<div class="col-md-8">



<?php
session_start();
$con=mysqli_connect("localhost","root","","fullstack");
if(!$con)
	die("Server could not connected");

$sqldata="select * from Paper ";
$rs=mysqli_query($con,$sqldata);
	while($value=mysqli_fetch_assoc($rs))
	{
		?>
	

<h4> <?php echo $value["Q.No"].". ". $value["Question"]; ?></h4>
<ul class="list-group">
  <li style="background-color: lightgreen;" class="list-group-item"><input type="radio" value=" <?php echo $value['Option1']; ?>" name="<?php echo $value['Q.No']; ?>" > <?php echo $value["Option1"] ?></li>


  <li style="background-color: lightgreen;" class="list-group-item"><input type="radio" value=" <?php echo $value['Option2']; ?>"  name="<?php echo $value['Q.No']; ?>"> <?php echo $value["Option2"] ?></li>


  <li style="background-color: lightgreen;" class="list-group-item"><input type="radio" value=" <?php echo $value['Option3']; ?>"  name="<?php echo $value['Q.No']; ?>"> <?php echo $value["Option3"] ?></li>


   <li style="background-color: lightgreen;" class="list-group-item"><input type="radio" value=" <?php echo $value['Option4']; ?>"  name="<?php echo $value['Q.No']; ?>"> <?php echo $value["Option4"] ?></li>
</ul>
<br>

<script type="text/javascript">
	

x=0;
		 not=0;
		 r=0;
	function fun()
	{
		
		if(document.frm.<?php echo $value["Q.No"]; ?>[0].checked && document.frm.<?php echo $value["Q.No"]; ?>[0].value==<?php echo $value["Answer"]; ?>)
		{
			x=x+1;
		}
		else if( !document.frm.<?php echo $value["Q.No"]; ?>[1].checked && !document.frm.<?php echo $value["Q.No"]; ?>[2].checked && !document.frm.<?php echo $value["Q.No"]; ?>[3].checked){
               not=not+1;   
	 }
	 else
	 {
	 r=r+1;	
	 }

	}
</script>


<?php



}
?>
<script type="text/javascript">
	 document.write("<center><b>Total Right Answer is: <b>"+x+"</center><br>");
	 
	  document.write("<center><b>Total wrong Answer is: <b>"+r+"</center><br>");
	 

	  	  document.write("<center><b>Total not Selected Answer is:<b> "+not+"<center><br>");


</script>

		

</div>
</div>











</form>
<br>
<br><center><p>© 2019 Punjab Education Board School, Inc. or its affiliates.<br>
All rights reserved.</p></center>
</body>
</html>