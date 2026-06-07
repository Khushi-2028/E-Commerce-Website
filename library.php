<html >
    <head>
        <style>
            <link href="style.css" type="text/css" rel="stylesheet">
        </style>
    </head>
    <?php
require_once("dbconnect.php");
function displayTable($sql){
    $con=$GLOBALS["con"];
    $rs=mysqli_query($con,$sql);
    $rc=mysqli_num_rows($rs);
    $cc=mysqli_num_fields($rs);
    //echo($rc." ".$cc);
    echo("<div id='list'>");
    echo("<table border='1'>");
    echo("<tr bgcolor='white'>");
    echo("<th>sl.no</th>");
    for($i=1;$i<=$cc-1;$i++){
        echo("<th>");
        echo(mysqli_fetch_field_direct($rs,$i)->name);
        echo("</th>");
    }
    echo("</tr>");
    $cnt=0;
    for($i=0;$i<=$rc-1;$i++){
        $cnt++;
        mysqli_data_seek($rs,$i);
        $row=mysqli_fetch_array($rs);
        $id=$row[0];
        echo("<tr bgcolor='#D9D87B'>");
        echo("<td>$cnt</td>");
        for($j=1;$j<=$cc-1;$j++){
           echo("<td>");
           echo($row[$j]);
           echo("</td>");
        }
        echo("</tr>");
    }
    echo("</table>");
    echo("</div>");
}

?>
</html>