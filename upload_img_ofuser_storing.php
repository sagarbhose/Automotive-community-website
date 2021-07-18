<?php
//$target_dir = "C:/xampp/htdocs/website/website car/imagesofuser/";
//$target_file=$target_dir . basename($_FILES["imageupload"]["name"]);
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // if (move_uploaded_file($_FILES["imageupload"]["tmp_name"], $target_file)) {
    //    echo "The file ". basename( $_FILES["imageupload"]["name"]). " has been uploaded.";
		//header("location:usermyprofilepage.php");
    //} else {
  //      echo "Sorry, there was an error uploading your file.";
//    }



 session_start();
$username_fetched=$_SESSION["username_fetched"];
$con=mysqli_connect('localhost','root','','peopleinfo');
$imagename=$_FILES["imageupload"]["name"];
$imagecontent=addslashes(file_get_contents($_FILES['imageupload']['tmp_name']));
$query="UPDATE info  SET image_name='$imagename',image_value='$imagecontent' WHERE username='$username_fetched'";
$result=mysqli_query($con,$query);
if($result)
	echo "image uploaded sucessfuly";
else
	echo $con->error;


mysqli_close($con);
header("location:usermyprofilepage.php");





?>


