<?php
function ternary($number){
$statement = $number<10 ? "$number is less than 10<br>" : "$number is not less than 10<br>";
}
echo ternary(4);
echo ternary(357);
?>