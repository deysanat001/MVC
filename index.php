<?php
require './controllers/Main.php';
    $base_url = "http://localhost/Task27-05-21/index.php";

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    $url.= $_SERVER['HTTP_HOST'];   
    $url.= $_SERVER['REQUEST_URI'];    
    $param =  str_replace($base_url,"",$url);
    $main = new Main($param,$base_url);

?>
