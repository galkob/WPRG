<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get" name="convertdate">
    <input type="date" name="input">
    <input type="submit" name="submit">
</form>
</body>
<?php
setlocale(LC_ALL,'pl_PL.UTF-8');
$input = $_GET['input'];
$date = strtotime($input);
$now = getdate();
if(isset($_GET['submit'])){
    echo "urodziles sie w: ".date('l',$date)."\n";
    echo "masz ".(getdate()['year']-date('Y',$date))." lat\n";
}
?>
</html>