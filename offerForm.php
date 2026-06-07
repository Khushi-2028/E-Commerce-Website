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
        echo("offer has been saved");
       }
       echo("</div>");
      }
    ?>
  
      
    <form method="post" enctype="multipart/form-data" action="insertOffer.php">
      <label>Enter Offer name</label>
      <input type="text" name="txtOfferName" maxlength="30">
      <label>Choose Offer Start Date</label>
      <input type="date" name="txtSdate">
      <label>Choose Offer End Date</label>
      <input type="date" name="txtEdate">
     
      <label>Choose Category</label>
      <select name='cmbCategory'>
        <option value="0">Choose Category Name</option>
        <?php 
           include("dbconnect.php");
           $rsCat=mysqli_query($con,"select * from category_info order by cat_name");
           while($row=mysqli_fetch_array($rsCat))
           {
               $id=$row['cat_id'];
               /*echo("<option value='$id'>");
               echo($row["cat_name"]);
               echo("</option>) ;*/           
               $name=$row['cat_name'];
               echo("<option value='$id'> $name </option>");
           }
        ?>
      </select>
      
      <label>Enter Offer Discount in %</label>
      <input type="text" name="txtDiscount">

      <div id='btnGroup'>
        <input type="submit" value="Ok">
        <input type="reset" value="Cancel">
      </div><!--end of buttonGroup-->
    </form>
    </div><!--end of my form-->
   


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
