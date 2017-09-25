<?php
session_start();
$connection=mysqli_connect("localhost","root","root","lankastall");

if(isset($_POST['createacc']))
{
$name=mysqli_real_escape_string($connection,$_POST['uname']);
$email=mysqli_real_escape_string($connection,$_POST['email']);
$city=mysqli_real_escape_string($connection,$_POST['city']);
$upw=mysqli_real_escape_string($connection,$_POST['upw']);


mysqli_query($connection,"INSERT INTO user(name,email,city,psw) 
VALUES('$name','$email','$city','$upw')");

mysqli_close($connection);
header('location:home.html');
}

if(isset($_POST['ulogin']))
{
$name=mysqli_real_escape_string($connection,$_POST['uname']);
$upw=mysqli_real_escape_string($connection,$_POST['upw']);

$result=mysqli_query($connection,"select * from user where name='$name' and psw='$upw'");
$count=mysqli_num_rows($result);

if($count==1){
$_SESSION['uname']=$name;

header('location:logedhome.php');
}

else{
$_SESSION['error']="Entered user name or password is wrong";
header('location:errorhome.php');
}

mysqli_close($connection);

}




if(isset($_POST['alogin']))
{
$aname=mysqli_real_escape_string($connection,$_POST['aname']);
$apw=mysqli_real_escape_string($connection,$_POST['apw']);

$result=mysqli_query($connection,"select * from admin where name='$aname' and psw='$apw'");
$count=mysqli_num_rows($result);

if($count==1){
$_SESSION['uname']=$aname;
header('location:Admin.php');
}

else{
$_SESSION['erroradmin']="Enter Correct user name & password";
header('location:errorhome.php');
}

mysqli_close($connection);

}

?>