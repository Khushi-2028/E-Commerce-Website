<?php @session_start();
include("header.php");
?>
<div id="content">

<div>&nbsp;</div>
<div id="tableContainer" >
    <table border='1'>
    <tr  bgcolor='white'> <th>Sl. No.</th><th>Item Name</th><th>Image</th> <th>Rate</th>   
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
        echo("<tr bgcolor='#D9D87B' >");
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

    echo("<tr  bgcolor='white'><th colspan='5' align='right'> Total Amount  </th> <th colspan='2'align='left'> $total </th> </tr>")


   ?>



    </table>


</div><!--end of tableContainer-->

<h1 align='center'>Want to add more item then, <a href='index.php' color='white'>Click Here</a> </h1>
<div id='placeOrder'>
    <a href='OrderForm.php'>Place Order</a>
</div>
<div>&nbsp;</div>


</div><!-- end of content-->
<?php
include("footer.php");
?>