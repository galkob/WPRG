<?php
function factorial($a,$b,$c,$d) {
    $tab = array();
    for($i=$a; $i<=$b;$i++){
        $tab+=array($i=>$c);
        if($c<$d) $c++;
    }
    return $tab;
}print_r(factorial(3,12,7,20));
