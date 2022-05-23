<?php include ("menu.php");
include ('db.php');
?>
<html>
<head>
    <link rel="stylesheet" type="text/css " href="layout.css">

</head>
</html>
<div class='a'>
<?php
#Create connection to SQL with PDO
#Variables
$country = $_POST["land"];
$capital = $_POST["hauptstadt"];
$continent = $_POST["kontinent"];

try {
#$pdo -> set Attribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
#SQL Insert
    $sql = "INSERT INTO laender VALUES ('$country', '$capital', '$continent')";
# use exec() because no results are returned
    $pdo->exec($sql);
    echo "Neuer Eintrag erfolgreich erstellt";
}

catch(PDOException $e) {
    echo $sql . "<br>" . $e -> getMessage();
    }
?>
</div>