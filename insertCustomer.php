<?php 
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtEmail"];
$c=$_REQUEST["txtMobile"];
$d=$_REQUEST["txtAddress"];
$e=$_REQUEST["txtUser"];
$f=$_REQUEST["txtPassword"];
include("dbconnect.php");
$sql="insert into customer_info(cust_name,cust_email,cust_mobile,cust_address,user_name,user_pass,user_type,reg_date) 
values('$a','$b','$c','$d','$e','$f','user',now())" ;

mysqli_query($con,$sql) or die("Query error");
header("location:CustomerForm.php?resmsg=1");
?>