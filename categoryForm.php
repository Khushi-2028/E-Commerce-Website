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
  <div>&nbsp;</div>
   <div id="myForm">
    <?php 
      if(isset($_REQUEST['resmsg']))
      {
       echo("<div id='resMessage'>");
       if($_REQUEST['resmsg']==1)
       {
        echo("your category has been created");
       }
       echo("</div>");
      }
    ?>
    <form method="post" enctype="multipart/form-data" action="insertCategory.php">
      <label>Enter category name</label>
      <input type="text" name="txtName" maxlength="30">
      <label>Enter category display name</label>
      <input type="text" name="txtDname">
      <label>Choose category image</label>
      <input type="file" name="flImage">
      <label>Choose category type</label>
      <select name='cmbType'>
        <option>Primary</option>
        <option>Secondary</option>
      </select>
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

      <div id='btnGroup'>
        <input type="submit" value="Ok">
        <input type="reset" value="Cancel">
      </div><!--end of buttonGroup-->
    </form>
   </div><!--end of myForm-->
   


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
