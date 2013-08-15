<?php
$class1 = new Myclass;
$class2 = new dog;
$class1->test($class2);
class MyClass {
public function test(dog $otherclass){
echo $otherclass->var;
}
}
class dog {
public $var = 'Hello World';
}
?>
