<!Doctype html>
<html>
    <div class = 'a'>
        <?php
            include ("menu.php");
            include('db.php');
            $sql = "SELECT * FROM laender WHERE Land='".$_POST['land']."'";
            echo"<table border='1'>
            <th>Land</th>
            <th>Haupstadt</th>
            <th>Kontinent</th>
            </tr>";
            echo "<br><br>";
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