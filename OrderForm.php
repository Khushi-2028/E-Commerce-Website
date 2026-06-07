<?php @session_start();
if(isset($_SESSION['uname']) && $_SESSION['utype']=='admin')
{

include("header.php");
?>
<div id="content">

<div>&nbsp;</div>
<div id="tableContainer">
    <table border='1'>
    <tr> <th>Sl. No.</th><th>Item Name</th><th>Image</th> <th>Rate</th>   
    <th>Qty</th><th>Amount</th><th>Status</th></tr>

    <?php 
    include("dbconnect.php");
    $usr=$_SESSION["uname"];
    $rscart=mysqli_query($con,"select * from cart_info,product_info where item_id=prod_id and user_name='$usr'");
    $cnt=0;
    $total=0;
    while($row=mysqli_fetch_array($rscart))
    {
        $cnt++;
        echo("<tr>");
        echo("<td>".$cnt."</td>");
        echo("<td>".$row['prod_name']."</td>");
        $img=$row["image_path"];
        echo("<td><img src='.//collection//$img' width='50' height='50'></td>");
        echo("<td>".$row['rate']."</td>");
        echo("<td>".$row['quantity']."</td>");

        $amnt=$row['rate']*$row['quantity'];

        $total = $total + $amnt;
        echo("<td>".$amnt."</td>");
        $id=$row["cart_id"];
        echo("<td><a href='deleteCart.php?cid=$id'>Delete</a></td>");
        echo("</tr>");
    }

    echo("<tr><th colspan='5' align='right'> Total Amount  </th> <th colspan='2'align='left'> $total </th> </tr>")


   ?>



    </table>


</div><!--end of tableContainer-->





    <?php 
      if(isset($_REQUEST["resmsg"]))
      {
          echo("<div id='resmessage'>");
          if($_REQUEST["resmsg"]==1)
          {
              echo("Wrong User Name!!!!");
          }
          else if($_REQUEST["resmsg"]==2)
          {
              echo("Wrong Password!!!!");
          }
         
          echo("</div>");  
      }

    ?>
    <form method="get" action="insertOrder.php">
        <input type="hidden" name="txtAmount" value='<?=$total?>'>
        <?php 
     $rsuser=mysqli_query($con,"select * from customer_info where user_name='$usr'");
     $row=mysqli_fetch_array($rsuser);
        ?>
        <label>Shipping Address</label>
        <textarea rows='4' name="txtAddress"><?php echo($row['cust_address']); ?></textarea>
        <div id="btnGroup">
            <input type="submit" value="Place Order">           

        </div>
    </form>



</div><!-- end of content-->
<?php
include("footer.php");
}
else 
{
  header("location:loginForm.php");
}
?>

?>