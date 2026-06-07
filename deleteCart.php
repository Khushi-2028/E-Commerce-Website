<?php 
$id=$_REQUEST["cid"];
include("dbconnect.php");
mysqli_query($con,"delete from cart_info where cart_id='$id'");
header("location:displayCart.php");
?>