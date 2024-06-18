<?php
function pierwsza($n, $m)
{
    for($i = $n; $i <=$m; $i++){
        $pierwsza = true;
        for ($j = 2; $j <= ($i/2); $j++){
            if($i % $j == 0){
                $pierwsza = false;
                break;
            }

        }
        if($pierwsza == true){
            echo $i."\t";
        }
    }
}
pierwsza(1,30);
?>
