<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(!isset($_COOKIE['vote'])){
?>
    <form method="post" name="glos">
        <span>czy lubisz wode?</span><br>
        <span>tak</span><input type="radio" value="tak" name="choice"><br>
        <span>nie</span><input type="radio" value="nie" name="choice"><br>
        <input type="submit" name="submit">
    </form>
<?php
    if(isset($_POST['submit'])){
setcookie('vote',"voted");}
}else{
    echo "już głosowałeś";
}
?>
</body>
</html>