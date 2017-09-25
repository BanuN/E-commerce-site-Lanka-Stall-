<?php

session_start();

if(isset($_SESSION['uname']))
{
$msg=$_SESSION['uname'];
echo $msg;
echo "&nbsp;&nbsp;&nbsp;<a id='logout' href='logout.php'>logout</a>";
}

if(isset($_SESSION['email']))
{
$ms=$_SESSION['email'];
echo $ms;

}

$amount = $_GET['amount'];
$sno = $_GET['sno'];
$connection=mysqli_connect("localhost","root","root","lankastall");




	$query1 = mysqli_query($connection,"SELECT * FROM itemdetails where sno='$sno'");


		while($row = mysqli_fetch_array($query1)) 
		{
		$s=$row['stock'];
		$in=$row['itemname'];
		$p=$row['pname'];
		$e=$row['email'];
		$l=$row['location'];
		$s=$s-1;
		}


$query1 = mysqli_query($connection,"UPDATE itemdetails SET stock='$s' where sno='$sno'");


$query2 = mysqli_query($connection,"SELECT * FROM user where name='$msg'");


		while($row = mysqli_fetch_array($query2)) 
		{
		$n=$row['name'];
		$add=$row['city'];
		$email=$row['email'];
		
		}



mysqli_close($connection);


$to = "banulna@gmail.com";
$subject = "item purchased";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Name</th>
<th>Address</th>
<th>Email</th>
</tr>
<tr>
<td>$n</td>
<td>$add</td>
<td>$email</td>
</tr>
</table>
</body>
</html>
";


?>
<h3>purchase confirmed<h3>
<h3>your details have been sent to the Supplier<br></h3>

<h4>Supplier details:</h4>
Name : <?php echo "$p <br>";?>
Email : <?php echo "$e <br>";?>
Location : <?php echo "$l <br>";?>







