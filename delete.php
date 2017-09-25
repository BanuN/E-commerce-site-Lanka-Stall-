<?php

$connection=mysqli_connect("localhost","root","root","lankastall");



$sno=mysqli_real_escape_string($connection,$_POST['sno']);


mysqli_query($connection,"DELETE FROM itemdetails WHERE sno='$sno'");

echo "Item $sno Removed successfully!";

mysqli_close($connection);


?>