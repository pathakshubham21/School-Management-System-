<?php
error_reporting(0);
$un=$_POST["un"];
$pw1=$_POST["pw1"];
$pw2=$_POST["pw2"];
$cor=$_POST["sel"];
$fee=$_POST["fee"];
$n=$_POST["name"];
$pic=$_POST["pic"];

if($pw1!=$pw2)
	die("Password and Confirm Password not same");
$con=mysqli_connect("localhost","root","","fullstack");
if(!$con)
	die("Server could not connected");
$sqldata="insert into asw values('".$un."','".$n."','".$pw1."','".$cor."','".$fee."','".$pic."','"."0"."','"."0%"."')";
$rs=mysqli_query($con,$sqldata);
if($rs!=0)
{
echo "<script type='text/javascript'>

		alert('Data Inserted');
</script>"
;
}
else
echo "Data not inserted";

?>


