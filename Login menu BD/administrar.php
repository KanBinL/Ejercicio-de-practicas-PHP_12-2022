<?php
    session_start();
    include ("lib/fecha.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
        <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    </head>
    <body>
        <?php
            $permiso = false;
            include("./abrir_conexion.php");
            
            $usuario = $_SESSION['usuario_valido']['id'];
            $instruccion = "SELECT id_roles FROM usuario_roles WHERE id_usuario = $usuario AND id_roles = 1";
            $consulta = mysqli_query($conexion, $instruccion)
                or die ("Fallo en la consulta");
            while ($resultado = mysqli_fetch_array ($consulta)){
                print ("<h1>Bienvenido Administrador para Administrar</h1>");
                $permiso = true;
            }
            mysqli_close($conexion);
            
            if ($permiso == false){
                print ("No tienes permiso ");
                print ("<a href='menu.php'><input type='button' value='Volver'></a>");
            } else {
                if(isset($_REQUEST['enviar'])){
                    include("./abrir_conexion.php");

                    $rol = $_REQUEST['rol'];
                    $roles = $_REQUEST['roles'];
                    $usuario = $_REQUEST['usuario'];

                    if ($usuario == ""){
                        print ("No puedes buscar usuario Vacio!<br><br>");
                        print ("<a href='administrar.php'><input type='button' value='Volver'></a>");
                    } else{
                        $instruccion = "select * from usuario where usuario = '$usuario'";
                        $consulta = mysqli_query($conexion, $instruccion)
                            or die ("Fallo en la consulta");

                        $nfilas = mysqli_num_rows($consulta);
                        if ($nfilas > 0){
                            if($rol == 'agregar'){
                                if ($roles == 'admin'){
                                    $instruccion5 = "select * from usuario where usuario = '$usuario'";
                                    $consulta5 = mysqli_query($conexion, $instruccion5)
                                        or die ("Fallo en la consulta");
                                    while ($resultado5 = mysqli_fetch_array($consulta5)){
                                        $id_usuario = $resultado5['id'];
                                        $instruccion = "insert into usuario_roles (id_usuario, id_roles) values ($id_usuario,1)";
                                        $consulta = mysqli_query($conexion, $instruccion)
                                            or die ("Fallo en la eliminacion");
                                    }
                                } elseif ($roles == 'profesor'){
                                    $instruccion5 = "select * from usuario where usuario = '$usuario'";
                                    $consulta5 = mysqli_query($conexion, $instruccion5)
                                        or die ("Fallo en la consulta");
                                    while ($resultado5 = mysqli_fetch_array($consulta5)){
                                        $id_usuario = $resultado5['id'];
                                        $instruccion = "insert into usuario_roles (id_usuario, id_roles) values ($id_usuario,2)";
                                        $consulta = mysqli_query($conexion, $instruccion)
                                            or die ("Fallo en la eliminacion");
                                    }
                                } else {
                                    $instruccion5 = "select * from usuario where usuario = '$usuario'";
                                    $consulta5 = mysqli_query($conexion, $instruccion5)
                                        or die ("Fallo en la consulta");
                                    while ($resultado5 = mysqli_fetch_array($consulta5)){
                                        $id_usuario = $resultado5['id'];
                                        $instruccion = "insert into usuario_roles (id_usuario, id_roles) values ($id_usuario,3)";
                                        $consulta = mysqli_query($conexion, $instruccion)
                                            or die ("Fallo en la eliminacion");
                                    }
                                }
                            } else {
                                if ($roles == 'admin'){
                                    $instruccion5 = "select * from usuario where usuario = '$usuario'";
                                    $consulta5 = mysqli_query($conexion, $instruccion5)
                                        or die ("Fallo en la consulta");
                                    while ($resultado5 = mysqli_fetch_array($consulta5)){
                                        $id_usuario = $resultado5['id'];
                                        $instruccion = "delete from usuario_roles where id_usuario = $id_usuario AND id_roles = 1";
                                        $consulta = mysqli_query($conexion, $instruccion)
                                            or die ("Fallo en la eliminacion");
                                    }

                                } elseif ($roles == 'profesor'){
                                    $instruccion5 = "select * from usuario where usuario = '$usuario'";
                                    $consulta5 = mysqli_query($conexion, $instruccion5)
                                        or die ("Fallo en la consulta");
                                    while ($resultado5 = mysqli_fetch_array($consulta5)){
                                        $id_usuario = $resultado5['id'];
                                        $instruccion = "delete from usuario_roles where id_usuario = $id_usuario AND id_roles = 2";
                                        $consulta = mysqli_query($conexion, $instruccion)
                                            or die ("Fallo en la eliminacion");
                                    }

                                } else {
                                    $instruccion5 = "select * from usuario where usuario = '$usuario'";
                                    $consulta5 = mysqli_query($conexion, $instruccion5)
                                        or die ("Fallo en la consulta");
                                    while ($resultado5 = mysqli_fetch_array($consulta5)){
                                        $id_usuario = $resultado5['id'];
                                        $instruccion = "delete from usuario_roles where id_usuario = $id_usuario AND id_roles = 3";
                                        $consulta = mysqli_query($conexion, $instruccion)
                                            or die ("Fallo en la eliminacion");
                                    }
                                }
                            }

                            print ("<TABLE>\n");
                            print ("<TR>\n");
                                print ("<TH>Usuario</TH>\n");
                                print ("<TH>Correo</TH>\n");
                                print ("<TH>Permiso</TH>\n");
                            print ("</TR>\n");

                            for ($i=0; $i<$nfilas; $i++){
                                $instruccion = "select * from usuario where usuario = '$usuario'";
                                $consulta = mysqli_query($conexion, $instruccion)
                                    or die ("Fallo en la consulta");
                                $resultado = mysqli_fetch_array($consulta);
                                print ("<TR>\n");
                                print ("<TD>" . $resultado['usuario']."</TD>\n");
                                print ("<TD>" . $resultado['correo']."</TD>\n");

                                $contador = 0;
                                $id_usuario = $resultado['id'];
                                $instruccion1 = "SELECT id_roles FROM usuario_roles WHERE id_usuario = $id_usuario";
                                $consulta1 = mysqli_query($conexion, $instruccion1)
                                        or die ("Fallo en la consulta");
                                print ("<TD>");
                                while ($resultado1 = mysqli_fetch_array($consulta1)){
                                    $id_roles = $resultado1['id_roles'];
                                    $instruccion2 = "SELECT rol FROM roles WHERE id = $id_roles";
                                    $consulta2 = mysqli_query($conexion, $instruccion2)
                                        or die ("Fallo en la consulta");
                                    while ($resultado2 = mysqli_fetch_array($consulta2)){
                                        if($contador != 0){
                                            print ("<br>");
                                        }
                                        print ($resultado2['rol']);
                                        $contador++;
                                    }
                                }
                                print ("</TD>\n");
                                print ("</TR>\n");
                            }
                            print ("</TABLE>\n <br><br>");
                            print ("<a href='administrar.php'><input type='button' value='Volver'></a>");


                        } else {
                            print ("No hay usuario disponibles<br><br>");
                            print ("<a href='administrar.php'><input type='button' value='Volver'></a>");
                        }
                    }
                    mysqli_close($conexion);
                } else {
                    include("./abrir_conexion.php");
                    $instruccion = "select * from usuario";
                    $consulta = mysqli_query($conexion, $instruccion)
                            or die ("Fallo en la consulta");

                    $nfilas = mysqli_num_rows($consulta);
                    if ($nfilas > 0){
                        print ("<TABLE>\n");
                        print ("<TR>\n");
                            print ("<TH>Usuario</TH>\n");
                            print ("<TH>Correo</TH>\n");
                            print ("<TH>Permiso</TH>\n");
                        print ("</TR>\n");

                        for ($i=0; $i<$nfilas; $i++){
                            $resultado = mysqli_fetch_array($consulta);
                            print ("<TR>\n");
                            print ("<TD>" . $resultado['usuario']."</TD>\n");
                            print ("<TD>" . $resultado['correo']."</TD>\n");

                            $contador = 0;
                            $id_usuario = $resultado['id'];
                            $instruccion1 = "SELECT id_roles FROM usuario_roles WHERE id_usuario = $id_usuario";
                            $consulta1 = mysqli_query($conexion, $instruccion1)
                                    or die ("Fallo en la consulta");
                            print ("<TD>");
                            while ($resultado1 = mysqli_fetch_array($consulta1)){
                                $id_roles = $resultado1['id_roles'];
                                $instruccion2 = "SELECT rol FROM roles WHERE id = $id_roles";
                                $consulta2 = mysqli_query($conexion, $instruccion2)
                                    or die ("Fallo en la consulta");
                                while ($resultado2 = mysqli_fetch_array($consulta2)){
                                    if($contador != 0){
                                        print ("<br>");
                                    }
                                    print ($resultado2['rol']);
                                    $contador++;
                                }
                            }
                            print ("</TD>\n");
                            print ("</TR>\n");
                        }
                        print ("</TABLE>\n <br><br>");

                    } else {
                        print ("No hay usuario disponibles");
                    }
                    mysqli_close($conexion); 
            ?>
                <form method="post">
                    Usuario: <input type="text" name="usuario"><br><br>

                    Rol: <input type='text' name='roles'><br>
                    <p>Nota: admin/profesor/alumno en minuscula</p><br>

                    Rol: <input type='radio' name='rol' value='agregar' checked>Agregar
                    <input type='radio' name='rol' value='quitar'>Quitar<br><br>

                    <input type="submit" value="Ejecutar" name="enviar"><br><br>

                    <a href='menu.php'><input type='button' value='Volver'></a>
                </form>
        <?php
                }
            }
        ?>
        
        
        
        
    </body>
</html>
