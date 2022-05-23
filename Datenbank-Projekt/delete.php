<html>
    <!-- <head>
        <link rel="stylesheet" type="text/css " href="layout.css">

    </head> -->
    <body>
        <?php
            #Create connection to SQL with PDO
            include ('db.php');
            include ("menu.php");
            #Variables
            $country = $_POST["land"];
            //$capital = $_POST["hauptstadt"];
            //$continent = $_POST["kontinent"];

            try {
                #$pdo -> set Attribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                #SQL Delete
                $sql = "DELETE FROM laender WHERE land = '$country'";
                # use exec() because no results are returned
                $pdo->exec($sql);
                echo "Das Land " .$country. " ist gelöscht.";
            }
            catch(PDOException $e) {
                echo $sql . "<br>" . $e -> getMessage();
            }
        ?>
    </body>
</html>

