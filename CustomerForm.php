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
              echo("Your data has been saved!!!!");
          }
          echo("</div>");  
      }

    ?>
    <form method="get" action="insertCustomer.php">
        <label>Enter your name</label>
        <input type="text" name="txtName">
        <label>Enter your email id</label>
        <input type="text" name="txtEmail">
        <label>Enter your mobile number</label>
        <input type="text" name="txtMobile">
        <label>Enter your address</label>
        <textarea name="txtAddress"></textarea>
        <label>Enter user name</label>
        <input type="text" name="txtUser">
        <label>Enter your password</label>
        <input type="password" name="txtPassword">
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