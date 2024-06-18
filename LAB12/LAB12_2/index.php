<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=WPRG", "root", "");
$persons = ("
    CREATE TABLE IF NOT EXISTS Persons (
    id int PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL
    )");
$cars = ("
    CREATE TABLE IF NOT EXISTS Cars (
    id int PRIMARY KEY AUTO_INCREMENT,
    model VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    dateofbuy DATE NOT NULL,
    Person_id INT NOT NULL,
    FOREIGN KEY (Person_id) REFERENCES Persons(id)
    )");
try {
    $db->query($persons);
}
catch (Exception $e){
    echo $e;
}
try{
    $db->query($cars);
}
catch (Exception $e){
    echo $e;
}

if(isset($_POST['editperson'])){
    ?>
    <form method="post">
        <input type="hidden" name="newpersonid" value=<?php echo $_SESSION['personid']?>>
        <input type="text" name="newfirstname" class="newfirstname" placeholder="First name" value=<?php echo $_SESSION['firstname']?>>
        <input type="text" name="newlastname" class="newlastname" placeholder="Last name" value=<?php echo $_SESSION['lastname']?>>
        <input type="submit" name="updateperson" class="updateperson" value="Update person">
    </form>
    <?php
} else {
    ?>
    <form method="post">
        <input type="text" name="firstname" class="firstname" placeholder="First name">
        <input type="text" name="lastname" class="lastname" placeholder="Last name">
        <input type="submit" name="addperson" class="addperson" value="Add person">
    </form>
    <?php
}
?>

<?php
if(isset($_POST['updateperson'])){
    $id=$_POST['newpersonid'];
    $firstname=$_POST['newfirstname'];
    $lastname=$_POST['newlastname'];
    $sql=("UPDATE Persons
    SET firstname='$firstname', lastname='$lastname'
    WHERE id='$id'");
    try{
        $db->query($sql);
    }
    catch(Exception $e){
        echo $e;
    }
}
if(isset($_POST['addperson'])) {
    echo "git1";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $addperson = ("INSERT INTO Persons (firstname, lastname) VALUES ('$firstname', '$lastname')");
    try {
        $db->query($addperson);
    }
    catch(Exception $e) {
        echo $e;
    }
    echo "git2";
}

if(isset($_POST['editcar'])){
    ?>

    <form method="POST">
        <input type="hidden" name="newcarid" value=<?php echo $_SESSION['carid'] ?>>
        <input type="text" name="newmodel" class="model" placeholder="Model" value=<?php echo $_SESSION['model'] ?>><br>
        <input type="number" name="newprice" class="price" placeholder="price" value=<?php echo $_SESSION['price'] ?>><br>
        <input type="date" name="newdate" class="date" value=<?php echo $_SESSION['dateofbuy'] ?>>
        <select name="newperson">

            <?php
            $sql = "SELECT * FROM Persons";
            try{
                $result = $db->query($sql);
            }
            catch(Exception $e){
                print $e;
            }
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='". $row['id']."'>".$row['firstname']." ". $row['lastname']."</option>";
            }
            ?>

        </select><br>
        <input type="submit" name="updatecar" value="Update car">
    </form>

    <?php
} else {
    ?>

    <form method="POST">
        <input type="text" name="model" class="model" placeholder="Model"><br>
        <input type="number" name="price" class="price" placeholder="price"><br>
        <input type="date" name="date" class="date">
        <select name="person">

            <?php
            $sql = "SELECT * FROM Persons";
            try{
                $result = $db->query($sql);
            }
            catch(Exception $e){
                print $e;
            }
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='". $row['id']."'>".$row['firstname']." ". $row['lastname']."</option>";
            }
            ?>

        </select><br>
        <input type="submit" name="addcar" value="Add car">
    </form>

    <?php
}
?>

<?php
if(isset($_POST['updatecar'])){
    $id=$_POST['newcarid'];
    $model=$_POST['newmodel'];
    $price=$_POST['newprice'];
    $dateofbuy=$_POST['newdate'];
    echo $dateofbuy;
    $Person_id=$_POST['newperson'];
    $sql=("UPDATE Cars
    SET model='$model', price='$price', dateofbuy='$dateofbuy', Person_id='$Person_id'
    WHERE id='$id'");
    try{
        $db->query($sql);
    }
    catch(Exception $e){
        echo $e;
    }
}
if(isset($_POST['addcar'])) {
    $model = $_POST['model'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $person = $_POST['person'];
    $addcar = ("INSERT INTO Cars (model, price, dateofbuy, Person_id) VALUES ('$model', '$price', '$date', '$person')");
    try {
        $db->query($addcar);
    }
    catch(Exception $e) {
        echo $e;
    }
}

?>

<h2>Persons</h2>
<form method="POST">
    <select name="orderperson">
        <option value="id">id</option>
        <option value="firstname">First name</option>
        <option value="lastname">Last name</option>
    </select>
    <input type="submit" name="sortperson" value="Sort"><br>
    <input type="text" name="featureperson" class="featureperson">
    <input type="submit" name="searchperson" class="searchperson" value="Search">
</form>
<table>
    <tr>
        <th>id</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Action</th>

        <?php
        $sortby="id";
        if(isset($_POST['sortperson'])) {
            $sortby = $_POST['orderperson'];
            echo "Sorting by: ".$sortby;
        }
        $sql = "SELECT id, firstname, lastname FROM Persons ORDER BY ".$sortby;
        if (isset($_POST['searchperson']))
        {
            $orderperson=$_POST['orderperson'];
            $featureperson=$_POST['featureperson'];
            $sql = "SELECT id, firstname, lastname FROM Persons WHERE $orderperson LIKE '$featureperson'";
            echo "Searching \"".$featureperson."\" in ".$orderperson.": ";
        }
        try {
            $result = $db->query($sql);
        }
        catch(Exception $e){
            echo $e;
        }
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>" . $row['id'] . "</td><td>". $row['firstname'] ."</td><td>". $row['lastname'];
            ?>
            <td>
                <form method="POST">
                    <input type='hidden' name='edpersonid' class='edpersonid' value=<?php echo $row['id'] ?>>
                    <input type="submit" name="deleteperson" class="deleteperson" value="Delete">
                    <input type="submit" name="editperson" class="editperson" value="Edit">
                </form>
            </td>
            <?php
        }
        ?>
    </tr>
</table>
<?php
if (isset($_POST['deleteperson'])){
    $deletepersonid=$_POST['edpersonid'];
    $sqlcar=("DELETE FROM Cars WHERE Person_id='$deletepersonid'");
    $sqlperson=("DELETE FROM Persons WHERE id='$deletepersonid'");
    $gitcar=true;
    $gitperson=true;
    try {
        $db->query($sqlcar);
    }
    catch(Exception $e){
        echo $e;
        $gitcar=false;
    }
    try{
        $db->query($sqlperson);
    }
    catch(Exception $e){
        echo $e;
        $gitperson=false;
    }
    if($gitcar&&$gitperson){
        echo "Succesfully deleted Person with id = ".$deletepersonid." and all of their cars";
    }
}
if (isset($_POST['editperson'])){
    $editpersonid=$_POST['edpersonid'];
    $sql=("SELECT * FROM Persons WHERE id='$editpersonid'");
    try{
        $result = $db->query($sql);
    }
    catch(Exception $e){
        echo $e;
    }
    $row=$result->fetch(PDO::FETCH_ASSOC);
    $_SESSION['personid']=$row['id'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['lastname'] = $row['lastname'];
}
?>

<h2>Cars</h2>
<form method="POST">
    <select name="ordercar">
        <option value="id">id</option>
        <option value="model">model</option>
        <option value="price">price</option>
        <option value="dateofbuy">date of buy</option>
        <option value="Person_id">Person_id</option>
    </select>
    <input type="submit" name="sortcar" value="Sort"><br>
    <input type="text" name="featurecar" class="featurecar">
    <input type="submit" name="searchcar" class="searchcar" value="Search">
</form>
<table>
    <tr>
        <th>id</th>
        <th>Model</th>
        <th>Price</th>
        <th>Date of buy</th>
        <th>Person_id</th>
        <th>Action</th>

        <?php
        $sortby="id";
        if(isset($_POST['sortcar'])) {
            $sortby = $_POST['ordercar'];
            echo "Sorting by: ".$sortby;
        }
        $sql = "SELECT id, model, price, dateofbuy, Person_id FROM Cars ORDER BY ".$sortby;
        if (isset($_POST['searchcar']))
        {
            $ordercar=$_POST['ordercar'];
            $featurecar=$_POST['featurecar'];
            $sql = "SELECT id, model, price, dateofbuy, Person_id FROM Cars WHERE $ordercar LIKE '$featurecar'";
            echo "Searching \"".$featurecar."\" in ".$ordercar.": ";
        }
        try {
            $result = $db->query($sql);
        }
        catch(Exception $e){
            echo $e;
        }
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>" . $row['id'] . "</td><td>". $row['model'] ."</td><td>". $row['price'] . "</td><td>" . $row['dateofbuy'] . "</td><td>" . $row['Person_id'] . "</td>";
            ?>
            <td>
                <form method="POST">
                    <input type='hidden' name='edcarid' class='edcarid' value=<?php echo $row['id']?>>
                    <input type="submit" name="deletecar" class="deletecar" value="Delete">
                    <input type="submit" name="editcar" class="editcar" value="Edit">
                </form>
            </td>
            <?php
        }
        ?>
    </tr>
</table>
<?php
if (isset($_POST['deletecar'])){
    $deletecarid=$_POST['edcarid'];
    $sql=("DELETE FROM Cars WHERE id='$deletecarid'");
    $git=true;
    try {
        $db->query($sql);
    }
    catch(Exception $e){
        echo $e;
        $git=false;
    }
    if($git){
        echo "Succesfully deleted Car with id = ".$deletecarid;
    }
}
if (isset($_POST['editcar'])){
    $editcarid=$_POST['edcarid'];
    $sql=("SELECT * FROM Cars WHERE id='$editcarid'");
    try {
        $result=$db->query($sql);
    }
    catch (Exception $e){
        echo $e;
    }
    $row=$result->fetch(PDO::FETCH_ASSOC);
    $_SESSION['carid']=$row['id'];
    $_SESSION['model']=$row['model'];
    $_SESSION['price']=$row['price'];
    $_SESSION['dateofbuy']=$row['dateofbuy'];
    $_SESSION['Person_id']=$row['Person_id'];
}
?>