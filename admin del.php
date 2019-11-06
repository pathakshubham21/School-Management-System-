<?php
session_start();
error_reporting(0);

$n=$_POST["un"];

$con=mysqli_connect("localhost","root","","fullstack");
if(!$con)
	die("Server could not connected");
$sqldata="DELETE FROM asw WHERE Username='".$n."'";
$rs=mysqli_query($con,$sqldata);
	if($rs!=0)
		echo "<center><br><br>
	<br><h1 style='color:orange;'>Student Data Has Deleted </h1><br>
	<a style='background-color: lightgreen;' href='admin admit.php'>Go to Back page</a></center>";
	else
		"Unable to delete the data";

	?>