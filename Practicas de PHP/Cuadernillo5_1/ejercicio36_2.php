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
            $usuario = $_REQUEST['usuario'];
            $color = $_REQUEST['color'];
            print ("<h1>Pagina 1</h1><br><br>");
            print ("Bienvenido ".$usuario);
            print ("<style>body{background-color: $color;}</style>");
            
            $_SESSION['usuario'] = $usuario;
            $_SESSION['color'] = $color;
        ?>
        <br><br><a href="ejercicio36_3.php"><input type="submit" value="Siguente pagina"></a>
    </body>
</html>
