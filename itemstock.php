

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

 


<?php
$c = $_GET['c'];
$connection=mysqli_connect("localhost","root","root","lankastall");

	$query1 = mysqli_query($connection,"SELECT * FROM itemdetails where code='$c'");
echo "<section id='itemtable'>";

		while($row = mysqli_fetch_array($query1)) 
		{
		$sno=$row['sno'];
		$p=$row['price'];
		$i=$row['image'];
		$in=$row['itemname'];
		
		echo "<a href=Details.php?sno=",urlencode($sno),"><img src='uploads/$i' id='item' ></a>";
		
		echo $in;
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "<h4 style='display:inline;'>Rs.$p</h4>";
		echo "<br>";
		}
		
		
echo "</section>";
mysqli_close($connection);
?>

<section id="sort">
<p id="lside"> &nbsp;&nbsp;
Sort by price:<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
<a id="slink" href="itemsort.php?c=<?php echo $c;?>&sortby='lohi'">Lowest-Highest</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="slink" href="itemsort.php?c=<?php echo $c;?>&sortby=hilo">Highest-Lowest</a>
<br><br><br>Categories :
<ul>
<li><a href="Art&craft.php" style="color:white;">Art & Craft</a></li><br>
<li><a href="#" style="color:white;">Clothes & Fabrics</a></li><br>
<li><a href="#" style="color:white;" >Leather & Ceramics</a></li><br>
<li><a href="#" style="color:white;">Gem & Jewellery</a></li><br>
<li><a href="#" style="color:white;">Others</a></li>
</ul>
</p>
</section>

<hr>
<footer>
<p style="font-size:12px; color:white;">Copyright &copy; 2014 LankaStall. All Rights Reserved | Cancelation, Refund Replacement And Policy | Terms and Conditions | Security & Privacy Statement</p>
</footer>

</div>
</body>
</html>