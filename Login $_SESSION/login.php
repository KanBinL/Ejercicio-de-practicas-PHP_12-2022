<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="menu.php" method="post">
            Usuario:
            <input type="text" name="l_usuario"><br><br>

            Password:
            <input type="password" name="l_pass"><br><br>

            <input type="submit" value="Iniciar" name="login">
        </form>
    </body>
</html>
