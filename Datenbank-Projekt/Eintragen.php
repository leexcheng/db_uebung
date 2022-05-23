<!Doctype html>
<html>
<!--     <head>
        <link rel="stylesheet" type="text/css " href="layout.css">
    </head> -->
    <?php session_start() ?>
    <?php include('menu.php'); 
        echo "<b> Neuen Eintrag erstellen</b><br><br>";
    ?>
    <div class='a'>
        <form action="insert.php" method="post">
            Land       : <input type ="text" name="land" /></br></br>
            Hauptstadt : <input type="text" name="hauptstadt" /></br></br>
            Kontinent  : <input name = "kontinent" type="text"></br></br>
                         <input type="submit" />
        </form>
    </div>
</html>
