<?php

class Controller {

  public static function CreateView($view_name) {
    require_once("./views/$view_name.php");

  }

}
