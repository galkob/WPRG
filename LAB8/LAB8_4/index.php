<?php
$string = "piotr je zupe z bUrakow";
$chars = array('a','e','i','o','u','A','E','I','O','U');
echo $string."\n";
$counter = 0;
foreach ($chars as $str) {
    $counter+=substr_count($string, $str);
}
echo $counter;
