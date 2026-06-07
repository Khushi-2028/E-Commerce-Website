<style>
<link href="css\styles.css" type="text/css" rel="stylesheet"/>
</style>
<?php
include("header.php");
?>
<div id="content">

<div id="register">
         <a href="displayNews.php">News </a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="CustomerForm.php">New User</a> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="LoginForm.php">Login</a>
</div><!--end of register-->

<div id="categoryArea">
  <?php 
     if(isset($_REQUEST["cid"]))
     {
         $prid=$_REQUEST["cid"];
     }
     else 
     {
           $prid=0;
     }
        include("dbconnect.php");
     $rscat=mysqli_query($con,"select * from category_info where cat_parent=$prid order by cat_dname");
     while($row=mysqli_fetch_array($rscat))
     {
        $id=$row["cat_id"];
        echo("<div class='category'>");
        echo("<a href='index.php?cid=$id'>");
        echo($row["cat_dname"]."<br><br>");
        $img=$row["image_path"];
        echo("<img src='.\\collection\\$img' width='100' height='100' border='10'>");
        echo("</a>");
        echo("</div>");
         }

  ?>

</div><!--end of cateforyArea-->


<div id="productArea">
  <?php 
     if(isset($_REQUEST["cid"]))
     {
         $prid=$_REQUEST["cid"];
     }
     else 
     {
           $prid=0;
     }
        include("dbconnect.php");
     $rscat=mysqli_query($con,"select * from product_info where parent_cat_id=$prid order by prod_name");
     while($row=mysqli_fetch_array($rscat))
     {
        $id=$row["prod_id"];
        echo("<div class='product'>");
        
        echo($row["prod_name"]."<br><br>");
        $img=$row["image_path"];
        echo("<img src='.\\collection\\$img' width='100' height='100' border='10'><br>");
        $x=$row["prod_rate"];
        $y=$row["prod_discount"];

        $specdis=0;
       $rsOffer= mysqli_query($con,"select * from offer_info where now() >= offer_start_dt and now() <= offer_end_dt");
        while($rowOffer=mysqli_fetch_array($rsOffer)){
              $cat=$rowOffer["cat_type"];
              $catarr=explode("-",$cat);
              if(in_array($prid,$catarr))
              {
               $specdis=$specdis+$rowOffer["offer_discount"];
              }
        }
        $y=$y+$specdis;
        $z= $x - ($x * $y/100);
        echo("Rate : <s> $x </s> <br>");
        echo("<font color='yellow' size='+1'> D. Rate : $z </font> <br>");

        echo("<div class='itmdetail'> ". $row["prod_detail"]  ." </div> ");

        echo("<div class='addCart'><a href='checkAlreadyLogin.php?itm=$id&rt=$z'>Add Cart</a></div>");





        
        echo("</div>");
         }

  ?>

</div><!--end of productArea-->

<div>&nbsp;</div>



</div><!-- end of content-->
<?php
include("footer.php");
?>