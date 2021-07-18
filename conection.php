<?php
 $con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";
	else
		echo"connection done";
	
mysqli_close($con);	
?>