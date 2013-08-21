<?php
$boobledorf = array('1' =>'boobles' , '2' =>'scaboodles' ,'3' => 'snoodles' ,'4' => 'krivitaboodles');
sort($boobledorf);
count($boobledorf);
if (array_key_exists('snoodles', $boobledorf)){
foreach ($boobledorf as $num =>$creatures){
echo "the $creatures are denizens of Boobledorf<br>";
}
}



?>
