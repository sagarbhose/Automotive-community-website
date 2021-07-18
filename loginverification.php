<?php


session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','peopleinfo');
$query="SELECT username,password FROM info where username LIKE '$username'" ;
$result=mysqli_query($con,$query);
if($result === FALSE) { 
    echo $con->error;
}
$x=0;
while($row = mysqli_fetch_array( $result,MYSQLI_NUM)){
$fetched_username=$row[0];
$fetched_password=$row[1];
}

$var=0;
if($fetched_username==$username && $fetched_password==$password){
	echo "<h1 style='color=red'>WELCOME</h1>";
	header('Location:usermyprofilepage.php');
		$query1="SELECT fname,lname,age,email,address,username,password,carowns FROM info where username like '$username'";
		$result1=mysqli_query($con,$query1);
		if($result1 == FALSE){
			echo $con->error;
		}
		while($row=mysqli_fetch_array($result1,MYSQLI_NUM)){
$firstnamevar = $row[0];
$_SESSION["firstname_fetched"]=$firstnamevar;

$lastnamevar = $row[1];
$_SESSION["lastname_fetched"]=$lastnamevar;

$agevar = $row[2];
$_SESSION["age_fetched"]=$agevar;


$emailvar = $row[3];
$_SESSION["email_fetched"]=$emailvar;

$addressvar = $row[4];
$_SESSION["address_fetched"]=$addressvar;


$usernamevar = $row[5];
$_SESSION["username_fetched"]=$usernamevar;


$passwordvar = $row[6];
$_SESSION["password_fetched"]=$passwordvar;

$carnamevar = $row[7];
$_SESSION["carname"]=$carnamevar;
}
}
else{
	header('location:loginnew1.html');
}	



 


mysqli_close($con);
?>