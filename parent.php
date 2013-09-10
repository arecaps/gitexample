<?php
class yellow{
  function flower(){
    $color = 'yellow';
	echo 'The flowers I bought are ' . $color . '.<br>'; 
	}
}
class orange extends yellow{

	function flower(){
    $color = 'orange';
	echo 'The flowers I will buy are ' . $color. '.<br>';
	$color = parent::$color;
	echo 'The flowers I will buy are ' . $color. '.<br>';
	}
}
$obj = new orange;
$obj ->flower();
?>
  