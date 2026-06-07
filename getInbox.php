<div>&nbsp;</div>
<table border="1" width="80%" align="center">
        <tr bgcolor='white'>
        <th width="100">Serial no.</th>
        <th >Message Heading</th>
        <th >Recieved Date</th>
        <th >Sender name</th>
        </tr>
   <?php
    include("dbconnect.php");
    $usr=$_SESSION["uname"];
   $rs=mysqli_query($con,"select msg_id,msg_heading,sent_date,sender_name from message_info 
   where receiver_name='admin' order by sent_date desc");
         $cnt=0;
         while($row=mysqli_fetch_array($rs))
            {         
            $cnt++;
            $id=$row["msg_id"];
            $hd=$row["msg_heading"];
            $sn=$row["sender_name"];
            $dt=$row["sent_date"];
            echo("<tr bgcolor='#D9D87B'>");
            echo("<td>");
            echo($cnt);
            echo("</td>");
             echo("<td>");
             echo("<a href='mssgDetail.php?nid=$id'>");
            echo($hd);
            echo("</a>");
            /* if($_SESSION["utype"]=="admin")
            {
             echo("<a href='mssgDetail.php?nid=$id'>");
            echo($hd);
            echo("</a>");
            }
             else{
            echo("<a href='mssgUserDetail.php?nid=$id'>");
            echo($hd);
             }*/
            echo("</td>");
            echo("<td>");
            echo($dt);
            echo("</td>");
            echo("<td>");
            echo($sn);
            echo("</td>");
            echo("</tr>");
         }
   ?>
    </table>