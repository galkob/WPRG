<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
    header("location:loggedin.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <span>login:</span><input type="text" name="login"><br>
    <span>haslo:</span><input type="text" name="haslo"><br>
    <input type="submit" name="submit" value="zaloguj">
</form>
<?php
$correctlogin = "blazej";
$correctpassword = "2137";
$login = $_POST['login'];
$password = $_POST['haslo'];
if (isset($_POST['submit'])) {
    if ($password == $correctpassword && $login == $correctlogin) {
        $_SESSION['loggedin'] = true;
        header('Location:loggedin.php');
    } else {
        echo "nieprawidlowe dane logowania";
    }
}
?>
</body>
</html>