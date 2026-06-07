<style>
  hr{
    border:2px solid blue;

  }
</style><?php @session_start();
if(isset($_SESSION['uname']) && $_SESSION['utype']=='user')
{

include("header.php");
?>
<div id='container'>

<div id="adminContainer">
  <div id='leftAdmin'>
    <?php 
       include('userMenu.php');
    ?>
      
  </div><!--end of leftAdmin-->
  <div id='rightAdmin'>
    <div style="width:80%; margin:10px; padding:20px; border:2px solid black; color:green;"> 
   <?php
   $id=$_REQUEST["nid"];
    include("dbconnect.php");
   $rs=mysqli_query($con,"select * from message_info where msg_id='$id' order by sent_date desc");
         
   $row=mysqli_fetch_array($rs);
                       
            $id=$row["msg_id"];
            $hd=$row["msg_heading"];
            $sn=$row["sender_name"];
            $dt=$row["sent_date"];
             $dtl=$row["msg_detail"];
            
            echo(" Heading: ".$hd);
            echo("<hr >");
            echo("Rec. Date: ".$dt);
            echo("<hr>");
            echo("Sender Name: ".$sn);
            echo("<hr>");
            echo("Detail: ".$dtl);
            echo("<hr>");
           
   ?>
   
</div>
    
<!--<div id="replybtn">
    <a href='replyFormByAdmin.php?usr=<?=$sn?>'>REPLY</a>
</div><!--end of replyButton-->


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
