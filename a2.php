<?php 
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtDname"];
$c=$_REQUEST["cmbType"];

$d=$_FILES["flImage"];
//echo($d["type"]);
//echo($d["size"]);
$img=$d["name"];
$img = time() ."_".$img; 
//echo($d["tmp_name"]);
move_uploaded_file($d["tmp_name"],".\\collection\\$img");

echo("file moved");

?>