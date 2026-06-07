<?php @session_start();

$_SESSION["itm"]=$_REQUEST["itm"];
$_SESSION["rt"]=$_REQUEST["rt"];

if(isset($_SESSION["uname"]))
{
    header("location:productQuantityForm.php");
}
else 
{
   header("location:newLoginForm.php");
}


?>