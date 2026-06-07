<html>
<style>
label 
{
    display: block;
}
</style>
<body>
 <form method="post" enctype="multipart/form-data" action="a2.php">
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
   
      <div id='btnGroup'>
        <input type="submit" value="Ok">
        <input type="reset" value="Cancel">
      </div><!--end of buttonGroup-->
    </form>
   
</body>    
</html>