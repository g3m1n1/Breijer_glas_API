<?php

class Home{ // Home class, basic page handler
  public static function index(){
  Flight::render("index.php");
  }
  
  
  public static function getText(){
    echo "Derp!";
  }
  
  
} // End of Home class






?>