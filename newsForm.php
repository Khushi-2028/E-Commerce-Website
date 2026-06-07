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
  <div id='rightAdmin'>
     <div id="myForm">
    <?php 
      if(isset($_REQUEST['status']))
      {
       echo("<div id='resMessage'>");
       if($_REQUEST['status']==1)
       {
        echo(" News has been saved");
       }
       echo("</div>");
      }
    ?>
    <form method="post" enctype="multipart/form-data" action="insertNews.php">
      <label>Enter News Heading</label>
      <input type="text" name="txtHeading">
       <label>Enter News Detail</label>  
       <textarea name="txtDetail"rows="10"></textarea>   
      <div id='btnGroup'>
        <input type="submit" value="Ok">
        <input type="reset" value="Cancel">
      </div><!--end of buttonGroup-->
    </form>
   

          </div><!--end of my form-->
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
