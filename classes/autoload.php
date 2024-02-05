<?php
error_reporting(E_ERROR);
  function myAutoload($name){
    if (file_exists("../classes/".$name.".php")) {
      require_once "../classes/".$name.".php";
    }elseif (file_exists("../classes/controllers/".$name.".php")) {
      require_once "../classes/controllers/".$name.".php";
    }
    elseif (file_exists("./classes/controllers/".$name.".php")) {
      require_once "./classes/controllers/".$name.".php";
    }
    elseif (file_exists("./controllers/".$name.".php")) {
      require_once "./controllers/".$name.".php";
    }
    
  }
  spl_autoload_register('myAutoload');
   