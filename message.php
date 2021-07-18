<?php
$servername="localhost";
$firstname=$_POST['fnames'];
$lastname=$_POST['lnames'];
$age=$_POST['ages'];
$email=$_POST['emails'];
$address=$_POST['address'];
$username_recorded=$_POST['usernames'];
$password_recorded=$_POST['passwords'];
$owner_carname=$_POST['carname'];
$con=mysqli_connect('localhost','root','','peopleinfo');
$query="INSERT INTO info (fname,lname,age,email,address,username,password,carowns) VALUES('$firstname','$lastname',$age,'$email','$address','$username_recorded','$password_recorded','$owner_carname')";
$ans=mysqli_query($con,$query);
if(!$ans)
	
	echo $con->error;
else
	echo "done";
	header('Location:loginnew1.html');


mysqli_close($con);
?>