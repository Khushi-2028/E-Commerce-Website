<?php @session_start(); ?>
<html>
    
      <head>
<link href="css\styles.css" type="text/css" rel="stylesheet"/>
</head>

    <body>
        <div id="main">
            <div id="header">
                <div id="leftlogo">
                   <a href='index.php'> <img src="images/shopping-logo.png"></a>
</div><!-- end of leftlog-->
<div id="title">
    <h1><a href='index.php'>Raipur-cart</a></h1>
    <h3>A Trusted Site With Best Quality Product</h3>
   

    <?php 
    if(isset($_SESSION["uname"]))
    {
        echo("<div id='loginInfo'>");
         echo("Welcome ".$_SESSION["uname"]);
         echo(" , <a href='logout.php'>logout</a>");
        echo("</div>");
    }


     ?>

</div><!--end of title-->
<div id="rightlogo">
    <img src="images/shopping-logo.png">
</div><!--end of rightlogo-->
<div id="searchBar">
    <form method="get" action="searchResult.php">
       <label>Enter Search Criteria</label>
      <input type="text" name="txtSearch" maxlength="30">
        <input type="submit" value="OK">
    </form>
</div>
            </div><!--end of header-->
