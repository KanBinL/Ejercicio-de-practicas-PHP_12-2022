<?php
    session_start();
    
    if(isset($_REQUEST['Salir'])){
        session_destroy();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="ejercicio36_2.php" method="post">
            Usuario:
            <input type="text" name="usuario"><br><br>

            Color:
            <select name="color">
                <option value="white" selected>Blanco
                <option value="red">Rojo
                <option value="green">Verde
                <option value="aqua">Azul
            </select><br><br>
            
            <input type="submit" value="Enviar" name="login">
        </form>
    </body>
</html>
