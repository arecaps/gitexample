<?php
$record = array('first_nm' =>'Oscar', 'last_nm' =>'The_Grouch</br>');
$records[] = $record;
$record['first_nm'] = 'Cookie';
$record['last_nm'] = 'Monster</br>';
$records[] = $record;
$record['first_nm'] = 'Big';
$record['last_nm'] = 'Bird</br>';
$records[] = $record;
$record['first_nm'] = 'The';
$record['last_nm'] = 'Count';
$records[] = $record;
sort($records);
array_pop($records);
print_r($records);
?>
