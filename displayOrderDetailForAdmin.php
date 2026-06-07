<style>
    #orderStatus{
        width:750px;;
        margin:10px;
        padding:10px;
        background-color:black;
    }
</style>
<?php @session_start();
if(isset($_SESSION['uname']) && $_SESSION['utype']=='admin')
{

include("header.php");
?>
<div id='container'>

<div id="adminContainer">
  <div id='leftAdmin'>
    <?php 
       include('adminMenu.php');
    ?>
      
  </div><!--end of leftAdmin-->
  <?php
  $id=$_REQUEST["id"];
  ?>
  <div id='rightAdmin'>
    <div id="orderStatus">

    <form method="get" action="updateOrderStatus.php">
        Change Order Status
        <input type="hidden" name="txtOrderId" value='<?php echo($id);?>'>
        <select name='cmbOrderStatus'>
            <option>Initiate</option>
             <option>Dispatched</option>
              <option>Recieved</option>
               <option>Reject</option>
               <option>Cancel</option>
                <option>Returned</option>
        </select>
        <input type="submit" value="OK">
    </form>
</div>
<?php
include("dbconnect.php");

$rsOrder=mysqli_query($con,"select * from order_detail,product_info where order_detail.item_id=product_info.prod_id
 and ref_order_id='$id' ");
echo("<div id='list'>");
echo("<table border='1'>");
echo("<tr bgcolor='white'>");
echo("<th>sl.no</th>");
echo("<th>Product Name</th>");
echo("<th>Total Quantity</th>");
echo("<th>Total Rate</th>");
echo("<th>Status</th>");
echo("</tr>");
$cnt=0;
while($row=mysqli_fetch_array($rsOrder))
    {
   $cnt++;
   $id=$row["detail_id"];
   echo("<tr bgcolor='#D9D87B'>");
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
    echo("<a href='displayOrderDetailForAdmin.php?id=$id'>Detail</a>");
     echo("</td>");
      echo("</tr>");
}
echo("</table>");

echo("</div>");
?>
  </div><!--end of rightAdmin-->


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
