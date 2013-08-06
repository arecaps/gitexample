<?php
$record = array('first_nm' =>'Oscar', 'last_nm' =>'The_Grouch');
$records[] = $record;
$record['first_nm'] = 'Cookie';
$record['last_nm'] = 'Monster';
$records[] = $record;
$record['first_nm'] = 'Big';
$record['last_nm'] = 'Bird';
$records[] = $record;
print_r($records);
?>
