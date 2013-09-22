<?php
class sandwich{
  
  public function type($sandwich){
    switch ($sandwich){
      case 'pastrami':
      echo "pastrami comes with fried onions and a pickle<br>";
      break;
      case 'hot dog':
      echo "hot dog comes with ketchup, mustard, or saur kraut<br>";
      break;
      case 'steak':
      echo "steak comes with relish and lettuce and tomatoes<br>";
      default:"sorry we don't have that<br>";
      }
  }
}

$obj = new sandwich;

$obj ->type('turkey');

$obj ->type('pastrami');
?> 
