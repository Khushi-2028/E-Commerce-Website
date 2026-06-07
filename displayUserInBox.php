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
include("getUserInbox.php");
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
