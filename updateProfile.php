<?php
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtEmail"];
$c=$_REQUEST["txtMobile"];
$d=$_REQUEST["txtAddress"];
$usr=$_SESSION["txtUser"];
$e=$_REQUEST["txtPassword"];
include("dbconnect.php");
mysqli_query($con,"update customer_info set cust_name='$a',cust_email='$b',cust_mobile='$c',cust_address='$d',user_pass='$e' 
where user_name='$usr'");
header("location:editProfile.php?status=1");
?>