<?php


$images = scandir("..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."upload_imgs");
//var_dump($images);
foreach ($images  as $img) {
   if (!in_array($img,array(".",".."))) {
      $filename = "..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."$img";
      
      $info = pathinfo($filename); 
        //echo "<hr> <img src='../../upload_imgs/".$info['basename']."'> <br>";
        if($info['filename'] == "base2"){
            echo "<hr> <img src='../../upload_imgs/".$info['basename']."'> <br>";
        }
        //var_dump($info);
   }
}