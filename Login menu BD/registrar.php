<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar</title>
    </head>
    <body>
        <?php
            if(isset($_REQUEST['registrar'])){
                include("./abrir_conexion.php");
                
                $usuario = $_REQUEST['usuario'];
                $correo = $_REQUEST['correo'];
                $pass = $_REQUEST['pass'];
                $error = 0;

                if(trim($pass) == ""|| trim($usuario) == "" || trim($correo) == ""){
                    $error = 0;
                } else {
                    $error = 1;
                    $instruccion = "SELECT usuario FROM usuario WHERE usuario = '$usuario'";
                    $consulta = mysqli_query($conexion, $instruccion)
                        or die ("Fallo en la consulta");
                    while ($resultado = mysqli_fetch_array ($consulta)){
                        $error = 2;
                    }
                }
                
                if ($error == 0){
                   print ("No puedes dejar campos vacios! ");
                   print ("<a href='registrar.php'><input type='button' value='Volver'></a>");
                } elseif ($error == 1) {
                    $instruccion = "insert into usuario (usuario, password , correo) value ('$usuario', '$pass', '$correo')";
                    mysqli_query($conexion, $instruccion)
                            or die ("Fallo en la consulta!");

                    $instruccion = "insert into usuario_roles (id_usuario, id_roles) value ((SELECT id FROM usuario WHERE usuario = '$usuario'), 3)";
                    mysqli_query($conexion, $instruccion)
                            or die ("Fallo en la consulta");
                    
                    print ("Se ha registrado correctamente!<br>");
                    print ("<a href='login.php'><input type='button' value='Iniciar'></a>");
                } else {
                    print ("Ya esta registrado este usuario! ");
                    print ("<a href='registrar.php'><input type='button' value='Volver'></a>");
                }
                mysqli_close($conexion);
            } else {
        ?>
            <form method="post">
                Usuario: <input type="text" name="usuario"><br><br>
                Correo: <input type="email" name="correo"><br><br>
                Password: <input type="password" name="pass"><br><br>

                <input type="submit" value="Registrar" name="registrar">
                <a href="login.php"><input type="button" value="Cancelar"></a>
            </form>
        <?php
            }
        ?>
    </body>
</html>
