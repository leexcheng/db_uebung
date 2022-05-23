<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css " href="layout.css">
    </head>
    <?php include('menu.php');
    include ('db.php'); ?>
    <div class = 'a'>
    <?php
    $sql = "SELECT * FROM laender ORDER BY LAND";
    echo"<table border='1'>
    <tr>
    <th>Land</th>
    <th>Haupstadt</th>
    <th>Kontinent</th>
    </tr>";
    echo "<br/><br/>";
    foreach ($pdo->query($sql) as $row) {
        echo "<tr>";
        echo "<td>".$row['Land']."</td>";
        echo "<td>".$row['Hauptstadt']."</td>";
        echo "<td>".$row['Kontinent']."</td>";
        echo "</tr>";
    }
    ?>
    </div>
</html>