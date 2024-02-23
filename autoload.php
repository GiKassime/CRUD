<?php 
 spl_autoload_register(function($classe){
    $arquivo=__DIR__."/".$classe.".php";
    $arquivo=str_replace("\\","/",$arquivo);
        if(is_file($arquivo)){
            require_once $arquivo;
        }

 });
?>