<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Kalkulator</h2>
<hr>
<h3>Prosty</h3>
<form method="post">
<input type="number" name="number1">
<select name="select_option">
    <option value="dodawanie" >Dodawanie</option>
    <option value="odejmowanie">Odejmowanie</option>
    <option value="mnozenie" >Mnożenie</option>
    <option value="dzielenie">Dzielenie</option>
</select>
<input type="number" name="number2"><br>
<input type="submit" name="oblicz1" value="Oblicz">
</form>
<hr>
<h3>Zaawansowany</h3>
<form method="post">
<input type="numer" name="number3">
<select name="select_extended">
    <option name="cos">cos</option>
    <option name="sin">sin</option>
    <option name="tg">tg</option>
    <option name="binToDec">binary to decimal</option>
    <option name="decToBin">decimal to binary</option>
    <option name="decToHex">decimal to hexagonal</option>
    <option name="hexToDec">hexagonal to decimal</option>
</select>
<input type="submit" name="oblicz2" value="Oblicz">
</form>
</body>
<?php
if(isset($_POST['oblicz1'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $select = $_POST['select_option'];
    echo $select;
    switch ($select) {

        case "dodawanie":
            echo $number1 + $number2;
            break;

            case "odejmowanie":
                echo $number1 - $number2;
                break;

                case "dodawanie":
            echo $number1 + $number2;
            break;
        case "mnozenie":
            echo $number1 * $number2;
            break;

            case "dzielenie":
                if(number2 == 0){
                    echo "NIE MOZNA DZIELIC PRZEZ 0!";
                    break;
                }
                echo $number1 / $number2;
                break;

    }
}
?>

</html>