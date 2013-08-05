<?php
 

class pass_by_val{
 
  public $num;
 
  function __construct($num){
    $this->num = 6;
    $num = $num * 2;
    echo $num;
  }
}

class pass_by_ref{
  
  function __construct(&$num){
    $this->num = 6;
    $num = $num * 2;
    echo $num;
  }
}

$val = new pass_by_val;

$ref = new pass_by_ref;

?>

