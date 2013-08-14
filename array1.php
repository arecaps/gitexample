<?php
$record = array('Oscar' =>' the Grouch</br>', 'Big' => 'Bird<br>','The' =>'Count<br>', 'Cookie' =>'Monster<br>', 'Mr.' =>'Cooper<br>'););
foreach ($record as $fir =>$las){
echo "$fir   $las";
$last_only = array_values($record);
print_r($last_only);
}
?>
