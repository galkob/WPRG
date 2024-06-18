<!DOCTYPE html>
<?php
session_start();
if(!$_SESSION['loggedin'])header('Location:index.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>no elo</h1>
<form method="post">
    <input type="submit" name="logout" value="wyloguj">
</form>
<?php
if(isset($_POST['logout'])){
    $_SESSION['loggedin'] = false;
    header('Location:index.php');
}
?>
</body>
</html>
