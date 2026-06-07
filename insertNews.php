<?php
$a=$_REQUEST["txtHeading"];
$b=$_REQUEST["txtDetail"];
include("dbconnect.php");
$sql="insert into news_info(news_heading,news_detail,reg_date,delete_status)
values('$a','$b',now(),0)";
mysqli_query($con,$sql) or die("Query error");
header("location:newsForm.php?status=1");

?>