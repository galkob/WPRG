<?php
if (!$fd = fopen('./adresy.txt', 'r')) {
    echo "Nie można otworzyć pliku adresy.txt";
}else{
    while(!feof($fd)){
        $str=fgets($fd);
        $str_arr = explode(":",$str);
        echo $str_arr[0]."\t".$str_arr[1];
    }
    fclose($fd);
}