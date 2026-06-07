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


<div id="myform">
    
    <?php 
      if(isset($_REQUEST["status"]))
      {
          echo("<div id='resmessage'>");
          if($_REQUEST["status"]==1)
          {
              echo("Your data has been updated!!!!");
          }
          echo("</div>");  
      }

    ?>
    <?php
    include("dbconnect.php");
    $usr=$_SESSION["uname"];
    $rsUser=mysqli_query($con,"select * from customer_info where user_name='$usr'");
    $row=mysqli_fetch_array($rsUser);
    $a=$row["cust_name"];
    $b=$row["cust_email"];
    $c=$row["cust_mobile"];
    $d=$row["cust_address"];
    $e=$row["user_pass"];
    ?>
    <form method="get" action="updateProfile.php">
        <label>Enter your name</label>
        <input type="text" name="txtName" value=<?php echo($a);?>>
        <label>Enter your email id</label>
        <input type="text" name="txtEmail" value=<?php echo($b);?>>
        <label>Enter your mobile number</label>
        <input type="text" name="txtMobile" value=<?php echo($c);?>>
        <label>Enter your address</label>
        <textarea name="txtAddress" ><?php echo($d);?></textarea >
        <label>Enter user name</label>
        <input type="text" name="txtUser" readonly="readonly" value=<?php echo($usr);?>>
        <label>Enter your password</label>
        <input type="password" name="txtPassword" value=<?php echo($e);?>>
        <div id="btnGroup">
            <input type="submit" value="OK">
            <input type="reset" value="Cancel">

        </div>
    </form>
   
</div><!--end of myform-->

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
