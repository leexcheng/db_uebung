<!Doctype html>
<html>
    <!-- <head>
        <link rel="stylesheet" type="text/css " href="layout.css">
    </head> -->

    <?php  
        include('Anzeigen.php');
        echo "<b>Eintrag nach dem Land suchen und Löschen </b><br><br>";
    ?>
    <form action="delete.php" method="post">
        Land:<input name="land" type="text">
             <input type="submit">
    </form>
</html>
