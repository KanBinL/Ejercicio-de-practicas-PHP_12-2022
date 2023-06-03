<?php
    session_start();
    include ("lib/fecha.php");
?>
<HTML LANG="es">
<HEAD>
   <TITLE>Consulta</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>
    <?php
        $permiso = false;
        include("./abrir_conexion.php");
        
        $usuario = $_SESSION['usuario_valido']['id'];
        $instruccion = "SELECT id_roles FROM usuario_roles WHERE id_usuario = $usuario AND id_roles = 1";
        $consulta = mysqli_query($conexion, $instruccion)
            or die ("Fallo en la consulta");
        while ($resultado = mysqli_fetch_array ($consulta)){
            print ("<h1>Bienvenido Administrador para consultar</h1>");
            $permiso = true;
        }
        
        if ($permiso == false){
            $instruccion = "SELECT id_roles FROM usuario_roles WHERE id_usuario = $usuario AND id_roles = 2";
            $consulta = mysqli_query($conexion, $instruccion)
                or die ("Fallo en la consulta");
            while ($resultado = mysqli_fetch_array ($consulta)){
                print ("<h1>Bienvenido Profesor para consultar</h1>");
                $permiso = true;
            }
        }
        
        if ($permiso == false){
            $instruccion = "SELECT id_roles FROM usuario_roles WHERE id_usuario = $usuario AND id_roles = 3";
            $consulta = mysqli_query($conexion, $instruccion)
                or die ("Fallo en la consulta");
            while ($resultado = mysqli_fetch_array ($consulta)){
                print ("<h1>Bienvenido Alumno para consultar</h1>");
                $permiso = true;
            }
        }
        
        if ($permiso == false){
            print ("No tienes permiso ");
            print ("<a href='menu.php'><input type='button' value='Volver'></a>");
        } else {
            
            $instruccion = "select * from noticias order by fecha desc";
            $consulta = mysqli_query($conexion, $instruccion)
                    or die ("Fallo en la consulta");

            $nfilas = mysqli_num_rows($consulta);
            if ($nfilas > 0){
                print ("<TABLE>\n");
                print ("<TR>\n");
                    print ("<TH>ID</TH>\n");
                    print ("<TH>Titulo</TH>\n");
                    print ("<TH>Texto</TH>\n");
                    print ("<TH>Categoria</TH>\n");
                    print ("<TH>Fecha</TH>\n");
                    print ("<TH>Imagen</TH>\n");
                print ("</TR>\n");

                for ($i=0; $i<$nfilas; $i++){
                    $resultado = mysqli_fetch_array($consulta);
                    print ("<TR>\n");
                    print ("<TD>" . $resultado['id']."</TD>\n");
                    print ("<TD>" . $resultado['titulo']."</TD>\n");
                    print ("<TD>" . $resultado['texto']."</TD>\n");
                    print ("<TD>" . $resultado['categoria']."</TD>\n");
                    print ("<TD>" . date2string($resultado['fecha'])."</TD>\n");
                    if ($resultado['imagen'] != ""){
                        print ("<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] .
                            "'><IMG BORDER='0' SRC='img/ico-fichero.gif' ALT='Imagen asociada'></A></TD>\n");
                    } else {
                        print ("<TD>&nbsp;</TD>\n");
                    }
                    print ("</TR>\n");
                }
                print ("</TABLE>\n");
            } else {
                print ("No hay noticias disponibles");
            }

            
            
            print ("<br><br>");
            $instruccion = "select * from votos order by id";
            $consulta = mysqli_query($conexion, $instruccion)
                    or die ("Fallo en la consulta");

            $nfilas = mysqli_num_rows($consulta);
            if ($nfilas > 0){
                print ("<TABLE>\n");
                print ("<TR>\n");
                    print ("<TH>ID</TH>\n");
                    print ("<TH>Voto1</TH>\n");
                    print ("<TH>Voto2</TH>\n");
                print ("</TR>\n");

                for ($i=0; $i<$nfilas; $i++){
                    $resultado = mysqli_fetch_array($consulta);
                    print ("<TR>\n");
                    print ("<TD>" . $resultado['id']."</TD>\n");
                    print ("<TD>" . $resultado['voto1']."</TD>\n");
                    print ("<TD>" . $resultado['voto2']."</TD>\n");
                    print ("</TR>\n");
                }
                print ("</TABLE>\n");
            } else {
                print ("No hay voto disponibles");
            }
            
            
            print ("<br><br>");
            print ("<a href='menu.php'><input type='button' value='Volver'></a>");
        }
        mysqli_close($conexion)
    ?>
</BODY>
</HTML>
