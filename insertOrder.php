<?php @session_start();

$a=$_REQUEST["txtAmount"];
$b=$_REQUEST["txtAddress"];
$usr=$_SESSION['uname'];

include("dbconnect.php");

$sql="insert into order_main(user_name,shipping_address,total_amount,order_date,order_status,update_date) values('$usr','$b','$a',now(),'initiate',now())";

mysqli_query($con,$sql) or die("query error 1");

$rsorder=mysqli_query($con,"select max(order_id) as modid from order_main ") or die("query error 2");
$row=mysqli_fetch_array($rsorder);

$rfid=$row["modid"];


$rscart=mysqli_query($con,"select * from cart_info where user_name='$usr'");

while($row=mysqli_fetch_array($rscart))
{
    $itm=$row["item_id"];
    $rt=$row["rate"];
    $qt=$row["quantity"];
    mysqli_query($con,"insert into order_detail(item_id,rate,quantity, ref_order_id,order_status) values('$itm','$rt','$qt','$rfid','initiate')") or die("query error 3");
}

mysqli_query($con,"delete from cart_info where user_name='$usr'") or die("query error 4");

header("location:displayOrder.php?odid=$rfid");


?>