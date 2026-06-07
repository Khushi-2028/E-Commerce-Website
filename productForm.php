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
       <div>&nbsp;</div>
    <?php 
      if(isset($_REQUEST['resmsg']))
      {
       echo("<div id='resMessage'>");
       if($_REQUEST['resmsg']==1)
       {
        echo("your product has been created");
       }
       echo("</div>");
      }
    ?>
    <form method="post" enctype="multipart/form-data" action="insertProduct.php">
      <label>Enter product name</label>
      <input type="text" name="txtName" maxlength="30">

      <label>Choose parent category </label>
      <select name='cmbParent'>
        <option value="0">Choose parent here</option>
        <?php 
           include("dbconnect.php");
           $rsCat=mysqli_query($con,"select * from category_info order by cat_name");
           while($row=mysqli_fetch_array($rsCat))
           {
               $id=$row['cat_id'];
               $name=$row['cat_name'];
               echo("<option value='$id'> $name </option>");
           }
        ?>
      </select>


      <label>Enter product rate</label>
      <input type="text" name="txtRate">

      <label>Enter discount in percent</label>
      <input type="text" name="txtDiscount">
      <label>Choose product image</label>
      <input type="file" name="flImage">
      <label>Enter product detail</label>
      <textarea rows=4 name='txtDetail'></textarea>
     
      <div id='btnGroup'>
        <input type="submit" value="Ok">
        <input type="reset" value="Cancel">
      </div><!--end of buttonGroup-->
    </form>
   
 <div>&nbsp;</div>
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
