


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

<?php
$sno = $_GET['sno'];
$connection=mysqli_connect("localhost","root","root","lankastall");

	$query1 = mysqli_query($connection,"SELECT * FROM itemdetails where sno='$sno'");
	
	while($row = mysqli_fetch_array($query1))
	{
		$seno=$row['sno'];
		$size=$row['size'];
		$i=$row['image'];
		$weight=$row['weight'];
		$code=$row['code'];
		$stock=$row['stock'];
		$price=$row['price'];
		
		if($stock==00)
		{
		$available="Out of Stock";
		}
		else
		$available=$stock." items available";
		}

mysqli_close($connection);
?>

<table>
<tr id="details">
<td><img src="uploads/<?php echo $i;?>" style="height:500px; width:430px;"></td>
<td><h4><?php echo $available;?></h4>
<br>Serial No: <?php echo $code.$seno;?>
<br>weight:<?php echo $weight;?>
<br>size: <?php echo $size;?><br><br><br>

Price:<?php echo $price;?><br><br><br>
<?php echo "<a href=buy.php?sno=",urlencode($sno),"><img src='images/buy.jpg' id='buy' ></a>";
?>




</td>
</tr>
</table>
	

<hr>
<footer>
<p style="font-size:12px; color:white;">Copyright &copy; 2014 LankaStall. All Rights Reserved | Cancelation, Refund Replacement And Policy | Terms and Conditions | Security & Privacy Statement</p>
</footer>

</div>
</body>
</html>