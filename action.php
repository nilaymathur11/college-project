<?php

include("dbaconnect.php");

$name = $_POST['cand_name'];
$fname= $_POST['father_name'];
$contact=$_POST['mobileno'];
$uemail=$_POST['email'];
$clas=$_POST['class'];

if($_REQUEST ['submit'])
{
 $chkquery=mysqli_query($conn,"select * From adm_query where email='".$_POST['uemail']."';");
if(mysqli_num_rows($chkquery))
	{
	echo "email id is already exist";
	}
else
{
 
$row=mysqli_fetch_assoc($chkquery);
	$query="INSERT INTO adm_query (cand_name,father_name,mobileno,email,class) VALUES 	('$name','$fname','$contact','$uemail','$clas)";
	$execute=mysqli_query($conn , $query);
}
}
?>