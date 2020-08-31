<?php

require 'config/config.php';


//AUTOLOAD
spl_autoload_register(function($className){
  
    require_once "controllers/".$className.".php";
 
})




?>