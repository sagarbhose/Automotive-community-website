<?php
    session_start();
  if (!isset($_SESSION['firstname_fetched'])){
      header('location:loginnew1.html');
	  exit();
   }
   
 ?>  

<HTML>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://localhost/website/website%20car/w3.css">
</head>
<body>
<div class="w3-container">
<div class="w3-container w3-border" style="background: linear-gradient(218.02deg, #F86148 0%, #FDB376 100%");>
<header>team-rpm.com</header>
<div class="w3-container" style="width:100%">
<p id="tagline">you make us as your choice we will make you as our decision</p>
</div>
</div>
</div>

<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
	
	
	
		 <a class="text-white btn   btn-outline-primary" href="http://localhost/website/website%20car/bloguploadusernew.php">blog upload</a>
		  <a class="text-white btn  btn-outline-primary" href="http://localhost/website/website%20car/maintimeline.php">maintimeline</a>
		   <a class="text-white btn  btn-outline-primary" href="http://localhost/website/website%20car/usermyprofilepage.php">myprofile</a>
		      <a class="text-white btn  btn-outline-primary" href="http://localhost/website/website%20car/uploadimgofuser.html">upload your photo</a>
			    <a class="text-white btn  btn-outline-primary" href="http://localhost/website/website%20car/descriptionpage.html">your interest and discription</a>
			  			       <a class="text-white btn  btn-outline-primary" href="http://localhost/website/website%20car/logoutprocessing.php">logout</a>
			  
			  
			  

    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
</body>
</html>







<?php

$fname_input=$_SESSION["firstname_fetched"];
$username_fetch=$_SESSION["username_fetched"];
$con=mysqli_connect('localhost','root','','peopleinfo');
$query="SELECT fname,carowns FROM info where fname LIKE '$fname_input'";
$result=mysqli_query($con,$query);
if($result==FALSE)
{	echo $con->error;
}

while($row = mysqli_fetch_array( $result,MYSQLI_NUM)){
$fetched_fname=$row[0];
$fetched_carname=$row[1];
}

$query_img_fetched="select image_name,image_value FROM info WHERE username LIKE '$username_fetch'";
$result=mysqli_query($con,$query_img_fetched);
if($result==FALSE)
{	echo $con->error;
}
while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
	$fetched_imagename=$row[0];
	$fetched_imagevalue=$row[1];
	


}
$query_info="SELECT interest,discription FROM info where fname LIKE '$fname_input'";
$result=mysqli_query($con,$query_info);
if($result){
		while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
	$fetched_interest=$row[0];
	$fetched_discription=$row[1];
	
		
	}
}

mysqli_close($con);

?>
<DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" href="D:\website car\w3.css">
<title>CAR PAGE</title>
<link rel="stylesheet" href="D:\website car\w3.css">
<link rel="stylesheet" href="D:\website car\jqueryui\jquery-ui.css">
<link rel="stylesheet" href="D:\website car\jqueryui\jquery-ui.min.css">
<link rel="stylesheet" href="D:\website car\jqueryui\jquery-ui.structure.css">
<link rel="stylesheet" href="D:\website car\jqueryui\jquery-ui.structure.min.css">
<link rel="stylesheet" href="D:\website car\jqueryui\jquery-ui.theme.css">
<link rel="stylesheet" href="D:\website car\jqueryui\jquery-ui.theme.min.css">
</head>
<body>

<div class="w3-container">
  <h2><?php echo $fetched_fname?></h2>
  <div class="w3-card-4" style="width:50%">
   <?php echo '<img src="data:image/jpg;base64,'.base64_encode($fetched_imagevalue).'" style="width:250px;height:250px;">';?>
    <div class="w3-container w3-center">
      <p><?php echo $fetched_carname?> OWNER</p>
    </div>
  </div>
</div
<div class="w3-container">
<div class="w3-container w3-display-center">
<h1><?php echo $fetched_fname?></h1><br>
<h3><?php echo $fetched_carname?><h3>
<div class='w3-container'>
<?php
			if($fetched_interest==!NULL && $fetched_discription==!NULL){
				
			echo  	"<div class='w3-card-4 w3-border' style='width:70%;'>
				<header class='w3-container w3-blue'>
				<h1> Interest</h1>
				
				<p>   $fetched_interest</p>
				</header>
				</div>
				<div class='w3-card-4 w3-border' style='width:70%;'>
				<header class='w3-container w3-blue'>
				<h1> Descriptions</h1>
			
				<p> $fetched_discription </p>
				</header>
				</div>";
			}
				?>
				</div>

</div>
</div>


</body>





</HTML>