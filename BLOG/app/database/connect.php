<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = '';

$connect = new MySQLi($host, $user,$pass,$db_name);

if($connect->connect_error){
    die('Nie udało się połączyć z bazą danych: '.$connect->connect_error);
}