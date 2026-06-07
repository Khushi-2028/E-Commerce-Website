<?php @session_start();
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtDname"];
$c=$_FILES["flImage"];
$d=$_REQUEST["cmbType"];
if($d=="Primary")
 $e=0;
else 
 $e=$_REQUEST["cmbParent"];

$usr=$_SESSION["uname"];
$img= time() ."_". $c["name"];
move_uploaded_file($c["tmp_name"], ".//collection//".$img);


include("dbconnect.php");

mysqli_query($con,"insert into category_info(cat_name,cat_dname,cat_type,cat_parent,image_path,reg_date,create_by) values('$a','$b','$d','$e','$img',now(),'$usr')") or die("Query error");

header("location:categoryForm.php?resmsg=1");


?>