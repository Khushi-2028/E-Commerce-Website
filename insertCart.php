<?php @session_start();

$q=$_REQUEST["txtQuantiry"];
$usr=$_SESSION["uname"];
$itm=$_SESSION["itm"];
$rt=$_SESSION["rt"];

include("dbconnect.php");

mysqli_query($con,"insert into cart_info(user_name,item_id,rate,quantity) values('$usr','$itm','$rt','$q')");

header("location:displayCart.php");




?>