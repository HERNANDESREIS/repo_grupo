<?php
include("../config.php");
//header("location:layout/_index.php");

@$page = @$_GET['page'];


include("header.php");
if(!isset($page)){
    include("home.php");
}else{
if(file_exists("$page.php")){
    include("$page.php");
}else{
    include("404.php");
}
}
include("footer.php");
//echo $_GET['action'];

//echo parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
//echo "<br>";
//echo $_GET['url'];
//echo $_GET['page'];
