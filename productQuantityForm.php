<?php
include("header.php");
?>
<div id="content">

<Div>&nbsp;</Div>
<div id="myform1">
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
    <form method="get" action="insertCart.php">
        <label>Enter Product Quantity</label>
        <input type="text" name="txtQuantiry">
        <div id="btnGroup">
            <input type="submit" value="OK">
            <input type="reset" value="Cancel">

        </div>
    </form>
</div><!--end of myform-->
<Div>&nbsp;</Div>



</div><!-- end of content-->
<?php
include("footer.php");
?>