
<?php @session_start();
if(isset($_SESSION['uname']) && $_SESSION['utype']=='user')
{

include("header.php");
?>
<div id='container'>

<div id="adminContainer">
  <div id='leftAdmin'>
    <?php 
       include('userMenu.php');
    ?>
      
  </div><!--end of leftAdmin-->
   
  <div id='rightAdmin'>
    <?php
  //$id=$_REQUEST['id'];
   $usr=$_SESSION["uname"];
  ?>
<?php
include("dbconnect.php");

$rsOrder=mysqli_query($con,"select * from order_main,order_detail,product_info where order_main.order_id=ref_order_id and order_detail.item_id=product_info.prod_id and user_name='$usr' ");

echo("<div id='list'>");
echo("<table border='1' align='center'>");
echo("<tr bgcolor='white'>");
echo("<th>sl.no</th>");
echo("<th>Product Name</th>");
echo("<th>Total Quantity</th>");
echo("<th>Total Rate</th>");

echo("</tr>");
$cnt=0;
while($row=mysqli_fetch_array($rsOrder))
    {
   $cnt++;
   $id=$row["detail_id"];
   echo("<tr  bgcolor='#D9D87B'>");
    echo("<td>");
    echo($cnt);
     echo("</td>");
      echo("<td>");
    echo($row["prod_name"]);
     echo("</td>");
      echo("<td>");
    echo($row["quantity"]);
     echo("</td>");
     echo("<td>");
    echo($row["rate"]);
     echo("</td>");
      
       echo("<td>");
    echo("<a href='displayOrderDetailForAdmin.php?id='$id'>Detail</a>");
     echo("</td>");
      echo("</tr>");
}
echo("</table>");

echo("</div>");
?>
  </div><!--end of rightAdmin-->

<div>&nbsp;</div>
</div><!--end of adminContainer-->




</div><!--end of container--> 
<?php 

  include("footer.php");
}
else 
{
  header("location:loginForm.php");
}
?>
