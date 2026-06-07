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
    
    <div id="myForm">
    <?php 
      if(isset($_REQUEST['status']))
      {
       echo("<div id='resMessage'>");
       if($_REQUEST['status']==1)
       {
        echo(" Your Complain has been saved");
       }
       echo("</div>");
      }
    ?>
    
    <form method="post" enctype="multipart/form-data" action="insertComplain.php">
    <?php
    $rec="admin";
    ?>
        <label>Complain To</label>
      <input type="text" name="txttoComplain" readonly="readonly" value='<?php echo("$rec");?>'/>
      <label>Complain Heading</label>
      <input type="text" name="txtHeading">
       <label>Complain  Detail</label>  
       <textarea name="txtDetail"rows="10"></textarea>   
      <div id='btnGroup'>
        <input type="submit" value="Ok">
        <input type="reset" value="Cancel">
      </div><!--end of buttonGroup-->
    </form>
   

          </div><!--end of my form-->
          <div>&nbsp;&nbsp;</div>
          
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
