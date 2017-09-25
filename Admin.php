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


if(!$_SESSION['uname']){
 header("Location: HTTP/1.1 404 File Not Found", 404);
          exit;}

if(isset($_SESSION['uname']))
{
$msg=$_SESSION['uname'];
echo $msg;
echo "&nbsp;&nbsp;&nbsp;<a id='logout' href='logout.php'>logout</a>";
}?>
</p>
<div class="con"> 


<nav>
<a href="Admin.php#p1">Add</a>&nbsp;
<a href="Admin.php#p2">Delete </a>&nbsp;
<a href="logedhome.php">View</a>
</nav>

<br><br>
<p id="p1">
<fieldset>
<legend><h1>Add Item</h1></legend>
<form name="admin" action="http://localhost/lankastall/data.php" method="post" enctype="multipart/form-data"><center>
<table style="color:white; font-size:25px; background-color:gray; ">
<tr>
<td>Serial No:</td>
<td><input type="text" name="sno"></td></tr>
<tr>
<td>Item Name:</td>
<td><input type="text" name="iname"></td></tr>
<tr><td>Category:</td>
<td><select name="category">
			<option value="Arts & Crafts">Arts & Crafts</option>
			<option value="Clothes & Fabrics">Clothes & Fabrics</option>
			<option value="Leather & Ceramics">Leather & Ceramics</option>
			<option value="Gem & Jewellery">Gem & Jewellery</option>
			<option value="Others">Others</option>
			</select></td></tr>
<tr><td>Code:</td>
<td><select name="code">
			<option value="acr">Rush & Reedware-acr</option>
			<option value="acw">Wood-acw</option>
			<option value="acp">Paper Mache-acp</option>
			<option value="acb">Brass-acb</option>
			<option value="aco">Oxidised-aco</option>
			<option value="acs">Silver-acs</option>
			<option value="acc">Copper-acc</option>
			</select></td></tr>
			
<tr><td>Material:</td><td><input type="text" name="material"></td></tr>
<tr><td>Weight:</td><td><input type="text" name="weight"></td></tr>
<tr><td>Size:</td><td><input type="text" name="size"></td></tr>
<tr><td>Price:</td><td><input type="text" name="price"></td></tr>
<tr><td>stock:</td><td><input type="text" name="stock"></td></tr>
<tr><td>upload image:</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td></tr>
   
<tr><td>image name:</td><td><input type="text" name="image"></td></tr>
<tr><td>producer Name:</td><td><input type="text" name="pname"></td></tr>
<tr><td>email:</td><td><input type="email" name="email"></td></tr>
<tr><td>location:</td><td><input type="text" name="location"></td></tr>

<tr><td colspan="2" style= "text-align:center">
<input type="submit" value="Add Item" name="add">
<input type="reset" value="Reset" name="reset">
</td></tr></table></center>

</form>
</fieldset>
<p>
<br><br>
<p id="p2">
<fieldset>
<legend><h1>Delete Item</h1></legend>
<form name="admin2" action="http://localhost/lankastall/delete.php" method="post"><center>
<table style="color:white; font-size:25px; background-color:gray; ">
<tr>
<td>serial No:</td>
<td><input type="text" name="sno"></td></tr>
<tr><td colspan="2" style= "text-align:center">
<input type="submit" value="Delete Item" name="add">
<input type="reset" value="Clear" name="reset">
</td></tr></table></center>
</form>
</fieldset>
</p>




	




</div>
</body>
</html>