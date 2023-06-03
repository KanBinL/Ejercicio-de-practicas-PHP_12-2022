<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu</title>
        <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    </head>
    <body>
        <?php
            if(isset($_REQUEST["login"])){
                include("./abrir_conexion.php");
                
                $usuario = $_REQUEST['usuario'];
                $pass = $_REQUEST['pass'];
                
                if($usuario == "" || $pass == ""){
                    $error = 0;
                } else {
                    $error = 1;
                    $instruccion = "SELECT * FROM usuario WHERE usuario = '$usuario' AND password = '$pass'";
                    $consulta = mysqli_query($conexion, $instruccion)
                        or die ("Fallo en la consulta");
                    while ($resultado = mysqli_fetch_array ($consulta)){
                        $_SESSION['usuario_valido'] = $resultado;
                        $error = 2;
                    }
                }
                mysqli_close($conexion);
                
                if ($error == 0){
                   print ("No puedes dejar campos vacios! <br>");
                } elseif ($error == 1) {
                    print ("El nombre de usuario y la contraseña no coinciden! <br>");
                } else {
                    print ("<h1>Bienvenido " . $usuario ."</h1>");
                }
            }
        ?>
        <?php
                    if (isset($_SESSION["usuario_valido"])){
        ?>
                        <br><br><h1>Menu:</h1><br><br>
                        <form action="administrar.php" method="post"><input type="submit" value="Administrar" name="Drones"><br></form>
                        <form action="consultas.php" method="post"><input type="submit" value="Consultar" name="Parcelas"><br></form>
                        <form action="eliminar.php" method="post"><input type="submit" value="Eliminar" name="Parcelas"><br></form>
                        <form action="inserta.php" method="post"><input type="submit" value="Insertar" name="Parcelas"><br></form>
                        <form action="login.php" method="post"><a href="login.php"><input type="submit" value="Cerrar sesion" name="salir"></a></form>
        <?php
                    } else {
                        print ("Iniciar sesion de nuevo ");
                        print ("<a href='login.php'><input type='button' value='Volver'></a>");
                    }
        ?>
    </body>
</html>
