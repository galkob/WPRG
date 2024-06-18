<?php
$string = "321\\+=3/32";
$chars = array('\\', '/','*','"','<','>','=','+','-','|');
echo str_replace($chars, '', $string);
