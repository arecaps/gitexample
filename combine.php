<?php

$composer_first =array('ludwig'  , 'wolfgang', 'johann');

$composer_last =array('beethoven', 'mozart' , 'bach');

$classic_composers = array_combine($composer_first, $composer_last);

print_r ($classic_composers);
?>
