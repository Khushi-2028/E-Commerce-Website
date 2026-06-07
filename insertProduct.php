<?php @session_start();
$a=$_REQUEST["txtName"];
$b=$_REQUEST["cmbParent"];
$c=$_FILES["flImage"];
$d=$_REQUEST["txtRate"];
$e=$_REQUEST["txtDiscount"];
$f=$_REQUEST["txtDetail"];

$usr=$_SESSION["uname"];
$img= time() ."_". $c["name"];
move_uploaded_file($c["tmp_name"], ".//collection//".$img);

include("dbconnect.php");
mysqli_query($con,"insert into product_info(prod_name,prod_rate,prod_discount,prod_detail,parent_cat_id,image_path,reg_date,create_by) values('$a','$d','$e','$f','$b','$img',now(),'$usr')") or die("Query error");

header("location:productForm.php?resmsg=1");


?>