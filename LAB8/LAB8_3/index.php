<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input type="text" name="string">
    <select name="option">
        <option value="reverse">Odwroc string</option>
        <option value="uppertolower">Wielkie na male</option>
        <option value="lowertoupper">Male na wielkie</option>
        <option value="count">Policz znaki</option>
        <option value="delete">Usun biale znaki z konca i poczatku</option>
    </select>
<input type="submit" value="SUBMIT" name="submit">
</form>

<?php
if(isset($_POST["submit"])){
    $string=$_POST["string"];
    $option=$_POST["option"];
    switch($option){
        case "uppertolower":
            echo strtolower($string);
            break;

        case "lowertoupper":
            echo strtoupper($string);
            break;

        case "reverse":
            echo strrev($string);
            break;

        case "count":
            echo strlen($string);
            break;

        case "delete":
            echo trim($string);
            break;

    }
}

?>

</body>
</html>