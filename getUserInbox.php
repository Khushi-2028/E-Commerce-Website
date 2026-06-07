<div id="userInbox">&nbsp;</div>
<table border="1" width="80%" align="center"  ;>
        <tr >
        <th width="100" bgcolor="white">Serial no.</th>
        <th bgcolor="white">Message Heading</th>
        <th bgcolor="white">Recieved Date</th>
        <th bgcolor="white" >Sender name</th>
        </tr>
   <?php
    include("dbconnect.php");
    $usr=$_SESSION["uname"];
   $rs=mysqli_query($con,"select msg_id,msg_heading,sent_date,sender_name from message_info 
   where receiver_name='$usr' order by sent_date desc");
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
            
            echo("<a href='mssgUserDetail.php?nid='$id'>");
            echo($hd);
             
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