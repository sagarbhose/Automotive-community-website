<DOCTYPE HTML>
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
<link rel="stylesheet" href="C:\xampp\htdocs\website\website car\w3.css">
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
			  			       <a class="text-white btn  btn-outline-primary" href="http://localhost/website/website%20car/logoutprocessing.php">logout</a>

    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<div class="w3-container">
<div class="w3-container w3-center">
<h1 id="heading">ACCELERATE YOUR PEDAL BY WRITE REVIEW ON YOUR CAR YOUR FIRST BLOG ON CAR</h1>
</div>
<form action="http://localhost/website/website%20car/blogstoringfile.php" method="POST">
<div class="w3-container w3-center">
<textarea name="content_blog" id="blogpart" placeholder="write your content" rows="30" cols="150"></textarea><br>
</div>

<div class="w3-container w3-center">
<input type="file">
<input id="submitbutton" type="submit"placeholder="submit">
</div>
</div>
</form>
</body>


</HTML>