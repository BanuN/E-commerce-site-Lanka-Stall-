
<! DOCTYPE html>
<head>
<title>LankaStall -Lanka Products</title>
<link href="style.css" rel="stylesheet" type="text/css">


<script>
$(document).ready(function(){

    $images[0].fadeToggle();
    $images[1].fadeToggle();
    $images[2].fadeToggle();
 
});
</script>


    <script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 4000);
          }

          var images = [], x = -1;
          images[0] = "image1.jpg";
          images[1] = "image2.jpg";
          images[2] = "image3.jpg";
		  images[3] = "image4.jpg";
      </script>

</head>

 <body onload = "startTimer()">
  <p id="heading">
  The House of Srilankan Arts & Crafts
    </p>
  <header>
 <img src="images/logo.jpg " id="logo">The House of Srilankan Arts & Crafts
 </header>
 <img src="images/yyy.jpg" style="position:absolute; left:241px;">

 
 <a href="#"> <img id="social" src="images/facebook.jpg"></a>
 &nbsp;&nbsp;
  <a href="#"> <img id="social" src="images/youtube.jpg"></a>
 
 <form style="position:absolute; top:120px; left:850px;">
<input type="text" size="20"><input type="submit" value="Search" name="search">
</form>


<p id="user">
<?php
session_start();

if(isset($_SESSION['uname']))
{
$msg=$_SESSION['uname'];
echo $msg;
echo "&nbsp;&nbsp;&nbsp;<a id='logout' href='logout.php'>logout</a>";
}?>
</p>



<div class="con"> 

<nav>
<a href="logedhome.php">Home</a>&nbsp;
<a href="Aboutus.php">About us </a>&nbsp;
<a href="Contactus.php">Contact</a>

</nav>



<section id="logform">
<form name="ulogin" action="http://localhost/lankastall/login.php" method="post" enctype="multipart/form-data"> <fieldset><legend>
User Login</legend>
User name: <input type="text" name="uname" ><br>
Password: &nbsp; <input type="password" name="upw" ><br>
<input type="submit" name="ulogin">
</fieldset>
</form>

<form name="createacc" action="http://localhost/lankastall/login.php" method="post" enctype="multipart/form-data"> 
<fieldset><legend>
Create Account</legend>

Name: &nbsp; &nbsp;&nbsp; &nbsp;  <input type="text" name="uname" ><br>
Email: &nbsp; &nbsp;&nbsp; &nbsp;  <input type="email" name="email" ><br>
Address:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  <input type="text" name="city" ><br>
Password: <input type="password" name="upw" ><br>
<input type="submit" name="createacc">
</fieldset>
</form>

<form name="alogin" action="http://localhost/lankastall/login.php" method="post" enctype="multipart/form-data"> 
<fieldset><legend>
Admin Login</legend>
Admin: &nbsp; &nbsp; <input type="text" name="aname" >
Password: <input type="password" name="apw" ><br>
<input type="submit" name="alogin">
</fieldset>
</form>
</section>


	
      <img id="img" src="images/startpicture.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  
	   <hr width="97%" align="left">
	   
	  <a href="http://localhost/lankastall/Art&craft.php"><img id="ico" src="images/icon1.jpg"></a> 
	   <a href="#"><img id="ico" src="images/icon4.jpg"></a> 
	   <a href="#"><img id="ico" src="images/icon3.jpg"></a> 
	   <a href="#"><img id="ico" src="images/icon2.jpg"></a> 
	   <a href="#"><img id="ico" src="images/icon5.jpg"></a> 

<hr>
<footer>
<p style="font-size:12px; color:white;">Copyright &copy; 2014 LankaStall. All Rights Reserved | Cancelation, Refund Replacement And Policy | Terms and Conditions | Security & Privacy Statement
</footer>

</div>
</body>
</html>




