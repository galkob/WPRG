<?php
function suma($n){
    $suma = 0;
    while($n > 1){
        $suma += $n%10;
        $n/=10;
    }
    if($suma<=10){echo $suma;}
}

?>