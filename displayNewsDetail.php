<?php
include("header.php");
?>
<div id="content">
   <div>&nbsp;</div>
    <table border="1" width="80%"align="center">
        <tr bgcolor="white">
        <th width="100">Serail no.</th>
        <th >News Detail</th>
        </tr>
   <?php
   $x=$_REQUEST["nid"];
         include("dbconnect.php");
         $rs=mysqli_query($con,"select news_id,news_detail from news_info where news_id=$x");
         $cnt=0;
         while($row=mysqli_fetch_array($rs))
            {
            $cnt++;
            $dt=$row["news_detail"]; 
            echo("<tr bgcolor='#D9D87B'>");        
            echo("<td>");
            echo($cnt);
            echo("</td>");
             echo("<td>");           
            echo($dt);           
            echo("</td>");
            echo("</tr>");
         }
   ?>
   </table>
</div><!-- end of content-->

<?php
include("footer.php");
?>
