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

<section id="sort">
<p id="lside">Address:</p>
<Address>
No. 14,<br> Phillip Gunawardena Mawatha,<br>
Colombo - 07.<br>
Sri Lanka.

<p id="lside"><br>Email:
</p>
lankastall@gmail.com

<p id="lside"><br>Contact:
</p>
0094 112 698 211

</Address>
</section>

<section id="inq">
<h2>
Inquiry Form</h2>	

<form action="MAILTO:banulna@gmail.com" method="post" enctype="text/plain">
Name* &nbsp;&nbsp;&nbsp <input type="text" name="iname"><br><br><br>
Email* &nbsp;&nbsp;&nbsp <input type="text" name="iname"><br><br><br>
Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="iname"><br><br><br>
Inquiry <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea rows="10" cols="50" name="inquiry" ></textarea>
<input type="submit" name="isubmit" value="Submit">


</form>
</section>

</div>
</body>
</html>