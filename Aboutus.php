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

 <img src="images/aboutus.jpg" style="position:absolute;top:150px; left:90px;">  
<p id="aboutus";>
LankaStall is no ordinary craft shop. It is an experience of Sri Lankan art and culture.Being the largest Craft Producer in Sri Lanka it is with this vision that we have succeeded

LankaStall is the marketing arm of the Sri Lanka Craftsmen and Artisans Association.We are ably supported by a team of leading designers

We have given artists across Sri Lanka a platform to express their true artistic talents and to spur their creativity whilst preserving dying traditions.we want to provide you with access to unique, hard-to-find items at great values.

We want you to feel that attachment to the product and to the hands that created it. Our selection comprises over 100 products including exquisite silver jewellery, metal work in silver, brass and copper, woodcarvings,batiks, masks, lacquer ware, pottery, hand woven rush and reed products, Hand embroidered linen, coconut products and many more.Come be inspired.

<p>	   
	




</div>
</body>
</html>