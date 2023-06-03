<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $usuario1 = $_SESSION['usuario'];
            $color1 = $_SESSION['color'];
            print ("<h1>Pagina 2</h1><br><br>");
            print ("Bienvenido ".$usuario1);
            print ("<style>body{background-color: $color1;}</style>");
        ?>
        <br><br><a href="ejercicio36_1.php"><input type="submit" value="Inicio"></a>
    </body>
</html>
