<?php
session_start();
$username_fetched=$_SESSION['username_fetched'];
$blog_data=$_POST['content_blog'];
$con=mysqli_connect("localhost","root","","peopleinfo");
if($con){
	$query="INSERT INTO blogs(username,content) VALUES('$username_fetched','$blog_data')";
	$result=mysqli_query($con,$query);
		if($result)
			header('location:userblogcontentfetched_file.php');
		else
			('location:bloguploadusernew.php');
			
}
mysqli_close($con);
?>