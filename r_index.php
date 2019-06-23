<?php
include("config.php");
//header("location:layout/_index.php");

@$page = @$_GET['page'];

if(file_exists("layout/$page.php")){
    //include("layout/$page.php");
}else{
    //header("Location: layout/404.php");
}

//echo parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
echo "<br>";
//echo $_GET['url'];
//echo $_GET['page'];
