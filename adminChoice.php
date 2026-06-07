<?php @session_start();
if(isset($_SESSION['uname']) && $_SESSION['utype']=='admin')
{

include("header.php");
?>
<style>
#container{
  bgcolor:bisque;}
</style>
<div id='container'>

<div id="adminContainer" >
  <div id='leftAdmin'>
    <?php 
       include('adminMenu.php');
    ?>
      
  </div><!--end of leftAdmin-->
 
  <div id='rightAdmin'>

  </div><!--end of leftAdmin-->


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
