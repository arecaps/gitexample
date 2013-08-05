<?php

class guy{

  public $age;

  public $name;
}

class fellow extends guy{
  function __construct();{
  
  $this->name = 'fred';
}
}
class gentleman extends fellow{
  function __construct();{

  $this->age = 'none of your business';
}
  echo 'My name is ' . $name . ' and my age is ' . $age;
}

$myinfo = new gentleman;
?>
