<?php

$temp = new mysqli("localhost", "root", "","");

$sql = "CREATE DATABASE WPRG";
if($temp->query($sql)===TRUE){
    echo "UTWORZONA";
}else{
    echo "err";
}
?>
