<?php

require_once('routes.php');

//CLASSES AUTOLOAD
function __autoload($class_name) {
  require_once './classes/'.$class_name.'.php';
}
