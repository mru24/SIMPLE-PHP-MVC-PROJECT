<?php

require_once('routes.php');

//CLASSES AUTOLOAD
function __autoload($class_name) {
  if(file_exists('./classes/'.$class_name.'.php')) {
    require_once './classes/'.$class_name.'.php';
  }else if(file_exists('./controllers/'.$class_name.'.php')) {
    require_once './controllers/'.$class_name.'.php';
  }

}
