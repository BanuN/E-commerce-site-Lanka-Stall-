


<! DOCTYPE html>
<head>
<title>LankaStall -Lanka Products</title>
<link href="style.css" rel="stylesheet" type="text/css">

<style>
.rotate{
	-webkit-transition-duration: 0.8s;
	-moz-transition-duration: 0.8s;
	-o-transition-duration: 0.8s;
	transition-duration: 0.8s;
	
	-webkit-transition-property: -webkit-transform;
	-moz-transition-property: -moz-transform;
	-o-transition-property: -o-transform;
	transition-property: transform;
	
	overflow:hidden;

	}	

.rotate:hover	
{ 
	-webkit-transform:rotate(360deg);
	-moz-transform:rotate(360deg); 
	-o-transform:rotate(360deg);
}	
</style>

</head>


 <body>
 
  <p id="heading">
  The House of Srilankan Arts & Crafts
    </p>
  <header>
 <img src="images/logo.jpg " id="logo">The House of Srilankan Arts & Crafts
 </header>
 
  <img src="images/yyy.jpg" style="position:absolute; left:241px;">
 <a href=""> <img id="social" src="images/facebook.jpg"></a>
 &nbsp;&nbsp;
  <a href=""> <img id="social" src="images/youtube.jpg"></a>
 
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
<div class="a">

<h1>
<?php
$sno = $_GET['sno'];
?>


<a href="buyoption.php?sno=<?php echo $sno;?>&option=Courier Service"><img src="images/courier.jpg" class="rotate" height="200" width="200" style="position:absolute; left:40px; top:40px;"  ></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="buyoption.php?sno=<?php echo $sno;?>&option=By Post"><img src="images/post.jpg" class="rotate" height="200" width="200" style="position:absolute; left:550px; top:40px;"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="buyoption.php?sno=<?php echo $sno;?>&option=Come To Collect"><img src="images/collect.jpg" class="rotate" height="200" width="200" style="position:absolute; left:320px; top:270px;"></a>





</div>



</div>
</body>
</html>