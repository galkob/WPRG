<?php

$tablica = array(
    1,2,3,4,5,6,7,8,9,10
);


function rozpychacz($tab,$n){
    if($n>sizeof($tab)){
        echo "BLAD";
        return 0;
    }
    array_splice($tab,$n, 0, '$');
return $tab;
}

print_r($tablica);
print_r(rozpychacz($tablica,4));


