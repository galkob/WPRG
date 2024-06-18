<?php
if(!$fd=fopen("./licznik.txt",'r')){
    $file=fopen("./licznik.txt",'w');
    fwrite($file,"1");
    fclose($file);
}else{
    while(!feof($fd)) {
        $str = fgets($fd);
        $str = strval((int)($str) + 1);
    }
    fclose($fd);
    $file=fopen("./licznik.txt", 'w');
    fwrite($file,$str);
    fclose($file);
}
?>