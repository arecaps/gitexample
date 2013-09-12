<?php
interface bank {
 public function credit ($current_bal, $credit);
 }
 
class trans implements bank{
  public function credit ($current_bal, $credit){
$current_bal = 100;
$credit = 246;
$current_bal = $current_bal + $credit;
return $current_bal;
echo $current_bal;
}
}
$obj = new trans;
$obj->credit($current_bal, $credit);
?>