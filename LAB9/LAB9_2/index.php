<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input type="text" id="path" name="path">
    <input type="text" id="dirname" name="dirname">
    <select id="operacja" name="operacja">
        <option value="read">read</option>
        <option value="delete">delete</option>
        <option value="create">create</option>
    </select>
    <button type="submit" id="wykonaj" value="wykonaj">wykonaj</button>
</form>
</body>
</html>
<?php
$path = $_POST["path"];
$dirname = $_POST["dirname"];
$operacja = $_POST["operacja"];

function manager($path, $dirname, $operacja){
    opendir($path);
    if(!($dir=readdir($path))){
        exit("nie moge znalezc sciezki".$path);
    }
$dirpath = $path."/".$path;

    switch($operacja){
        case "read":
            while(($file=readdir($dirpath))!==false)
                echo "$file<br>";
            closedir($dirpath);
            break;

            case "delete":
                if(count(scandir($dirpath))>2){
                    echo "Katalog nie jest pusty";
                }else rmdir($dirpath);
                break;
                case "create":
                    mkdir($dirpath);
                    break;
    }
    if(is_null($path)) $path="./";

    manager($path, $dirname, $operacja);
}



?>