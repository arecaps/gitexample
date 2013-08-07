<?php
$record = array('first_nm' =>'Oscar', 'last_nm' =>'The_Grouch</br>');
$records[] = $record;
$record['first_nm'] = 'Cookie';
$record['last_nm'] = 'Monster</br>';
$records[] = $record;
$record['first_nm'] = 'Big';
$record['last_nm'] = 'Bird</br>';
$records[] = $record;
print_r($records);
?>
