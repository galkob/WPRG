<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

$mysqli = mysqli_connect('localhost',"root","","WPRG");
$create = ("
    CREATE TABLE Student(
    StudentID INT PRIMARY KEY,
    Firstname VARCHAR(255),
    Secondname VARCHAR(255),
    Salary INT,
    DateOfBirth DATE
)");
try{
    $mysqli->query($create);
    echo "Utworzono tabelę"."<br><br>";
}
catch (Exception $e){
    echo "Tabela juz istnieje"."<br><br>";
}

$result = $mysqli->query("DESCRIBE Student");
echo "Tabela: "."<br>";
while($row = $result->fetch_assoc()){
    echo $row['Field']."&nbsp;&nbsp;&nbsp".$row['Type']."<br>";
}
?>
<h2>Manage MySQL Table</h2>
<form method="post">
    <input type="submit" value="Delete Table" name="delete">
</form>
<?php
if(isset($_POST['delete'])){
    $drop="DROP TABLE Student";
    $mysqli->query($drop);
}
?>
</body>
</html>