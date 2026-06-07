<?php
include("header.php");
?>
<div id="content">
    
   <div>&nbsp;</div>    
<table border="1" width="80%"align="center" >
        <tr bgcolor="white">
        <th width="100">Serail no.</th>
        <th >News Heading</th>
        </tr>
   <?php
    include("dbconnect.php");
   $rs=mysqli_query($con,"select news_id,news_heading from news_info where delete_status=0 order by reg_date desc");
         $cnt=0;
         while($row=mysqli_fetch_array($rs))
            {         
            $cnt++;
            $id=$row["news_id"];
            $hd=$row["news_heading"];
            echo("<tr bgcolor='#D9D87B'>");
            echo("<td>");
            echo($cnt);
            echo("</td>");
             echo("<td>");
             echo("<a href='displayNewsDetail.php?nid=$id'>");
            echo($hd);
            echo("</a>");
            echo("</td>");
            echo("</tr>");
         }
   ?>
    </table>
     
</div><!-- end of content-->
       
<?php
include("footer.php");
?>
