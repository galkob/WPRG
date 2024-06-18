<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<from method="post" name="access">
    <input type="submit" value="reset">
</from>

<?php
if(!isset($_COOKIE['access'])){
    setcookie('access', 1);
    $accesscount = 1;
}else{
    $accesscount = $_COOKIE['access'];
    setcookie('access',++$accesscount);
}

echo "liczba odwiedzin: ".$_COOKIE['access']."\n";
if($accesscount>10) echo "osiagnieto już ponad 10 odwiedzin!";

?>
</body>
</html>

<?php
if(isset($_POST['reset'])){setcookie('access', 1);}

?>