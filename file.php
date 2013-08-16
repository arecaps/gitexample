<?php

$first_run = TRUE;

if (($handle = fopen("example.csv", "r")) !== FALSE) {

  while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
    if ($first_run == TRUE) {
    $fieldnames = $data;
    $first_run = FALSE;}

else{
  $data = array_combine($field_names, $data);
  $records[] = $data;
}
}
}
?>
