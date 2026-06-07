<?php
    $cats="";
   function getChildCategory($prnt)
   {
     $GLOBALS["cats"]=$GLOBALS["cats"].$prnt."-";
     include("dbconnect.php");
     $rsCat=mysqli_query($con,"select cat_id from category_info where cat_parent='$prnt'");
     if(mysqli_num_rows($rsCat)==0){
        return;
     }
     else{
        while($row=mysqli_fetch_array($rsCat))
        {
            getChildCategory($row["cat_id"]);
        }
     }
   }
$a=$_REQUEST["txtOfferName"];
$b=$_REQUEST["txtSdate"];
$c=$_REQUEST["txtEdate"];
$d=$_REQUEST["cmbCategory"];
$e=$_REQUEST["txtDiscount"];
$tempdt=strtotime("1 day",strtotime($c));
$newdt=date("y-m-d",$tempdt);
/*strtotime time of */
echo($newdt);
getChildCategory($d);

$str=substr($cats,0,strlen($cats)-1);
include("dbconnect.php");
mysqli_query($con,"insert into offer_info(offer_name,offer_start_dt,offer_end_dt,cat_type,offer_discount,reg_date)
        values('$a','$b','$newdt','$cats','$e',now())")
       or die("Query error");
header("location:offerForm.php?status=1");
?>