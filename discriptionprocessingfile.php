<?php
session_start();
$username=$_SESSION['username_fetched'];
$con=mysqli_connect('localhost','root','','peopleinfo');
$interest_uploading=$_POST['interest'];
$discription_uploading=$_POST['description'];
if($con){
	$query="UPDATE INFO SET interest='$interest_uploading',discription='$discription_uploading' WHERE username='$username'";
	$result=mysqli_query($con,$query);
		if($result)
			header('location:usermyprofilepage.php');
		else
			echo $result->error;
			
}
mysqli_close($con);

?>