<! DOCTYPE html>
<head>
<title>LankaStall -Lanka Products</title>
<link href="style.css" rel="stylesheet" type="text/css">
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
<section id="categories">
<h1 style="color:white">Categories</h1>
<?php
$r='acr';
$c='acw';
$p='acp';
$b='acb';
$o='aco';
$s='acs';
$co='acc';

echo "<a href=itemstock.php?c=",urlencode($r),">Rush & Reedware</</a><br>";
echo "<a href=itemstock.php?c=",urlencode($c),">Wood</a><br>";
echo "<a href=itemstock.php?c=",urlencode($p),">Paper Mache</a><br>";
echo "<a href=itemstock.php?c=",urlencode($b),">Brass</a><br>";
echo "<a href=itemstock.php?c=",urlencode($o),">Oxidised</a><br>";
echo "<a href=itemstock.php?c=",urlencode($s),">Silver</a><br>";
echo "<a href=itemstock.php?c=",urlencode($co),">Copper</a><br>";

?>
</section>   
   

<img id="art" src="images/image5.jpg">

	   
	

<hr>
<footer>
<p style="font-size:12px; color:white;">Copyright &copy; 2014 LankaStall. All Rights Reserved | Cancelation, Refund Replacement And Policy | Terms and Conditions | Security & Privacy Statement</p>
</footer>

</div>
</body>
</html>