<?php @session_start();

$a=$_REQUEST["txtHeading"];
$b=$_REQUEST["txtDetail"];
$usr=$_SESSION["uname"];
$rec=$_REQUEST["txttoComplain"];
include("dbconnect.php");
$msql="insert into message_info(msg_heading,msg_detail,sender_name,receiver_name,sent_date)
values('$a','$b','$usr','$rec',now())";
mysqli_query($con,$msql) or die("Query error");
if($_SESSION["utype"]=="user")
header("location:complainForm.php?status=1");
else
header("location:displayAdminInbox.php")
?>