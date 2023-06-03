<?php
    session_start();
    include ("lib/fecha.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminacion</title>
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
                print ("<h1>Bienvenido Administrador para eliminar</h1>");
                $permiso = true;
            }
            
            if ($permiso == false){
                $instruccion = "SELECT id_roles FROM usuario_roles WHERE id_usuario = $usuario AND id_roles = 2";
                $consulta = mysqli_query($conexion, $instruccion)
                    or die ("Fallo en la consulta");
                while ($resultado = mysqli_fetch_array ($consulta)){
                    print ("<h1>Bienvenido Profesor para eliminar</h1>");
                    $permiso = true;
                }
            }
            mysqli_close($conexion);
            
            if ($permiso == false){
                print ("No tienes permiso ");
                print ("<a href='menu.php'><input type='button' value='Volver'></a>");
            } else {
                if (isset($_REQUEST['eliminar'])){
                    include("./abrir_conexion.php");
                    if(isset($_REQUEST['borrar'])){
                        // Obtener numero de noticias a borrar
                        $borrar = $_REQUEST['borrar'];
                        $nfilas = count ($borrar);

                        // Mostrar noticias a borrar
                        for ($i=0; $i<$nfilas; $i++) {
                            // Obtener datos de la noticia
                            $instruccion = "select * from noticias where id = $borrar[$i]";
                            $consulta = mysqli_query($conexion, $instruccion)
                                or die ("Fallo en la consulta");
                            $resultado = mysqli_fetch_array ($consulta);

                            // Mostrar datos de la noticia
                            print ("Noticia eliminada:\n");
                            print ("<UL>\n");
                            print ("   <LI>Titulo: " . $resultado['titulo']);
                            print ("   <LI>Texto: " . $resultado['texto']);
                            print ("   <LI>Categoria: " . $resultado['categoria']);
                            print ("   <LI>Fecha: " . date2string($resultado['fecha']));
                            if ($resultado['imagen'] != "")
                               print ("   <LI>Imagen: " . $resultado['imagen']);
                            else
                               print ("   <LI>Imagen: (no hay)");
                            print ("</UL>\n");

                            // Eliminar noticia
                            $instruccion = "delete from noticias where id = $borrar[$i]";
                            $consulta = mysqli_query($conexion, $instruccion)
                                or die ("Fallo en la eliminaci�n");
                            // Borrar imagen asociada si existe
                            if ($resultado['imagen'] != "") {
                              $nombreFichero = "img/" . $resultado['imagen'];
                              unlink ($nombreFichero);
                            }
                        }
                        print ("<P>Numero total de noticias eliminadas: " . $nfilas . "</P>\n");

                        // Cerrar conexi�n
                        mysqli_close ($conexion);
                        print ("<P>[ <A HREF='eliminar.php'>Eliminar mas noticias</A> ]</P><br><br>");
                        print ("[ <A HREF='menu.php'>Volver al menu</A> ]");
                    } else {
                        print("No hay nada que borrar<br>");
                        print ("<a href='eliminar.php'><input type='button' value='Volver'></a>");
                    }
                } else {
                    include("./abrir_conexion.php");

                    // Enviar consulta
                    $instruccion = "select * from noticias order by fecha desc";
                    $consulta = mysqli_query($conexion, $instruccion)
                        or die ("Fallo en la consulta");

                    // Mostrar resultados de la consulta
                    $nfilas = mysqli_num_rows ($consulta);
                    if ($nfilas > 0) {
                        print ("<FORM ACTION='eliminar.php' METHOD='post'>\n");
                        print ("<TABLE>\n");
                        print ("<TR>\n");
                        print ("<TH>Titulo</TH>\n");
                        print ("<TH>Texto</TH>\n");
                        print ("<TH>Categoria</TH>\n");
                        print ("<TH>Fecha</TH>\n");
                        print ("<TH>Imagen</TH>\n");
                        print ("<TH>Borrar</TH>\n");
                        print ("</TR>\n");
                        for ($i=0; $i<$nfilas; $i++){
                            $resultado = mysqli_fetch_array ($consulta);
                            print ("<TR>\n");
                            print ("<TD>" . $resultado['titulo'] . "</TD>\n");
                            print ("<TD>" . $resultado['texto'] . "</TD>\n");
                            print ("<TD>" . $resultado['categoria'] . "</TD>\n");
                            print ("<TD>" . date2string($resultado['fecha']) . "</TD>\n");

                            if ($resultado['imagen'] != "")
                                print ("<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] .
                                        "'><IMG BORDER='0' SRC='img/ico-fichero.gif' ALT='Imagen asociada'></A></TD>\n");
                            else
                                print ("<TD>&nbsp;</TD>\n");

                            print ("<TD><INPUT TYPE='CHECKBOX' NAME='borrar[]' VALUE='" .
                                    $resultado['id'] . "'></TD>\n");
                            print ("</TR>\n");
                        }

                        print ("</TABLE>\n");
                        print ("<BR>\n");
                        print ("<INPUT TYPE='SUBMIT' NAME='eliminar' VALUE='Eliminar noticias marcadas'><br><br>");
                        print ("<a href='menu.php'><input type='button' value='Volver'></a>");
                        print ("</FORM>\n");
                    } else
                        print ("No hay noticias disponibles");
                    // Cerrar conexion
                    mysqli_close ($conexion);
                }
            }
        ?>
    </body>
</html>
