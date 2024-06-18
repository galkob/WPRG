<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">

    <span>Imie:</span><input type="text" name="imie"><br>
    <span>Nazwisko:</span><input type="text" name="nazwisko"><br>
    <span>Adres email:</span><input type="text" name="email"><br>
    <span>Haslo:</span><input type="password" name="password"><br>
    <span>Potwierdz haslo:</span><input type="password" name="confirm_password"><br>
    <span>Wiek:</span><input type="number" name="wiek"><br>
    <input type="submit" name="rejestracja" value="Zarejestruj sie"><br>
</form>
<?php
if(isset($_POST['rejestracja'])){
    $name = $_POST['imie'];
    $surname =  $_POST['nazwisko'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $submit_password = $_POST['confirm_password'];
    $wiek = $_POST['wiek'];

    echo $name." ".$surname." ".$email." ".$password." ".$submit_password." ".$wiek;
}
?>
</body>
</html>
