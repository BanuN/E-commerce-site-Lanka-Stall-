


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
<div class="aa">


<?php
$option = $_GET['option'];
$sno = $_GET['sno'];
$connection=mysqli_connect("localhost","root","root","lankastall");

	$query1 = mysqli_query($connection,"SELECT * FROM itemdetails where sno='$sno'");
echo "<section id='itemtable'>";

		while($row = mysqli_fetch_array($query1)) 
		{
		$p=$row['price'];
		$w=$row['weight'];
		$in=$row['itemname'];
		$i=$row['image'];
		}
		
if($option=="Courier Service"){
$amount=$p+ $w*200;

echo "<img src='uploads/$i' style='height:200px; width:200px;'><br><br>";
echo "Purchasing option : $option <br>";
echo "Purchasing item : $in <br>";
echo "Your full amount : Rs $amount <br>";
echo "Delivery :  within 2 days  <br><br>";
echo "Confirm your purchase <br> ";

}
		

if($option=="By Post"){
$amount=$p+ $w*100;

echo "<img src='uploads/$i' style='height:200px; width:200px;'><br><br>";
echo "Purchasing option : $option <br>";
echo "Purchasing item : $in <br>";
echo "Your full amount : Rs $amount <br>";
echo "Delivery :  within 4 days  <br><br>";
echo "Confirm your purchase <br> ";


}


if($option=="Come To Collect"){
$amount=$p;

echo "<img src='uploads/$i' style='height:200px; width:200px;'><br><br>";
echo "Purchasing option : $option <br>";
echo "Purchasing item : $in <br>";
echo "Your full amount : Rs $amount <br><br>";
echo "Confirm your purchase <br> ";


}
	

echo "<a href='purchasing.php?sno=$sno&amount=$amount'><img src='images/confirm.jpg' height='40' width='100'></a>	";	
echo "</section>";
mysqli_close($connection);
?>





</div>



</div>
</body>
</html>