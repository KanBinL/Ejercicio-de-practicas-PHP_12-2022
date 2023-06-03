<?php
    session_start();
    if(isset($_REQUEST['salir'])){
        session_destroy();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Iniciar secion</title>
    </head>
    <body>
        <form action="menu.php" method="post">
            Usuario: <input type="text" name="usuario"><br><br>
            Password: <input type="password" name="pass"><br><br>
            <input type="submit" value="Iniciar" name="login">
            <a href="registrar.php"><input type="button" value="Registrar"></a>
        </form>
        
    </body>
</html>