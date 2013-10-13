<?php
class colors{
  function __construct(){
  $suit = 'navy';
  $shirt = 'white';
  $tie = 'red';
  }
}
  $obj = new colors;

$wardrobe = (array)$obj;
print_r($wardrobe);
?>