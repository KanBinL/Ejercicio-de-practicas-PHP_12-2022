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

            if(isset($_REQUEST["login"])){
                $l_usuario = $_REQUEST['l_usuario'];
                $l_pass = $_REQUEST['l_pass'];
                $_SESSION['usuario_valido'] = $l_usuario;
            }
            
            if (isset($_SESSION["usuario_valido"]))
            {
                echo ("Bienvenido ".$_SESSION['usuario_valido']);
        ?>
                <br><br>Menu:<br><br>
                <form action="Ejecutar.php" method="post">
                    <input type="submit" value="Descargar" name="Descargar"><br>
                </form>

                <form action="Ejecutar.php" method="post">
                    <input type="submit" value="Subir" name="Subir"><br>
                </form>

                <form action="Ejecutar.php" method="post">
                    <input type="submit" value="Eliminar" name="Eliminar"><br>
                </form>
        <?php
            }
        ?>
    </body>
</html>
