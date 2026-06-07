<html>
<body>
    <?php
    $str="1-4-3-7-8-9";
    $z=explode("-",$str);/*before- this sign first elemnt*/
    echo($z[2]);
    if(in_array(7,$z)){
        echo("hello");
    }else{
        echo("hyy");
    }
    $x=array(10,30,20,60,40);
    $y=implode(";;",$x);
    /*string to array*/
    echo($y);
    ?>
</body>
</html>