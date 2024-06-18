<?php
function ciagArtGeo($pierwszy,$q,$n){
$a = $pierwszy;
$g = $pierwszy;
for($i = 1;$i<$n; $i++){
    $a+=$q;
    $g*=$q;
}
echo $a.",".$g;
}


ciagArtGeo(3,3,4);

?>