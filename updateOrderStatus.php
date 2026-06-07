<?php @session_start();
$a=$_REQUEST["txtOrderId"];
$b=$_REQUEST["cmbOrderStatus"];
include("dbconnect.php");
mysqli_query($con,"update order_main set order_status='$b',update_date=now() where order_id='$a' ");
if($_SESSION["utype"]=='user')
header("location:displayOrderMainForCancelUser.php");
else
header("location:displayOrderMainForAdmin.php");
?>