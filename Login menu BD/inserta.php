<?php
    session_start();
    include ("lib/fecha.php");
?>
<html>
    <head>
        <title>Insertar</title>
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
                print ("<h1>Bienvenido Administrador para insertar</h1>");
                $permiso = true;
            }
            
            if ($permiso == false){
                $instruccion = "SELECT id_roles FROM usuario_roles WHERE id_usuario = $usuario AND id_roles = 2";
                $consulta = mysqli_query($conexion, $instruccion)
                    or die ("Fallo en la consulta");
                while ($resultado = mysqli_fetch_array ($consulta)){
                    print ("<h1>Bienvenido Profesor para insertar</h1>");
                    $permiso = true;
                }
            }
            mysqli_close($conexion);
            
            if ($permiso == false){
                print ("No tienes permiso ");
                print ("<a href='menu.php'><input type='button' value='Volver'></a>");
            } else {
                if (isset($_REQUEST['insertar'])){
                    // Obtener valores introducidos en el formulario
                    $titulo = $_REQUEST['titulo'];
                    $texto = $_REQUEST['texto'];
                    $categoria = $_REQUEST['categoria'];

                    

                    $errores = "";
                    if (trim($titulo) == ""){
                        $errores = $errores . " <li>Se requiere el titulo de la noticia\n";
                    }
                    if (trim($texto) == ""){
                        $errores = $errores . " <li>Se requiere el texto de la noticia\n";
                    }
                    
                    include("./abrir_conexion.php");
                    $instruccion = "SELECT * FROM noticias WHERE titulo = '$titulo'";
                    $consulta = mysqli_query($conexion, $instruccion)
                        or die ("Fallo en la consulta");
                    while ($resultado = mysqli_fetch_array ($consulta)){
                        $errores = $errores . " <li>El titulo ya existe\n";
                    }
                    mysqli_close($conexion);
                    
                    $copiarFichero = false;        

                    if(is_uploaded_file ($_FILES['imagen']['tmp_name'])){
                        $nombreDirectorio = "img/";
                        $nombreFichero = $_FILES['imagen']['name'];
                        $copiarFichero = true;

                        $nombreCompleto = $nombreDirectorio . $nombreFichero;
                        if (is_file($nombreCompleto)){
                            $isUnico = time();
                            $nombreFichero = $isUnico . "-" . $nombreFichero;
                        }
                    } elseif($_FILES['imagen']['error'] == UPLOAD_ERR_FORM_SIZE){
                        $maxsize = $_REQUEST['max_file_size'];
                        $errores = $errores . " <li>El tamaño del fichero supera el limite permitido ($maxsize bytes)\n";
                    }elseif ($_FILES['imagen']['name'] == ""){
                        $nombreFichero = "";
                    } else {
                        $errores  = $errores . "<li>No se ha podido subir el fichero\n";
                    }


                    if ($errores != ""){
                        print ("<P>No se ha podido realizar la insercion debido a los siguentes errores:</P>\n");
                        print ("<ul>\n");
                        print ($errores);
                        print ("</ul>\n");
                        print ("<p>[ <a href='javascript:history.back()'>Volver</A> ]</P>\n");
                    } else {
                        include("./abrir_conexion.php");

                        $fecha = date ("Y-m-d"); // Fecha actual
                        $instruccion = "insert into noticias (titulo, texto, categoria, fecha, imagen) values ('$titulo', '$texto', '$categoria', '$fecha', '$nombreFichero')";
                        $consulta = mysqli_query($conexion, $instruccion)
                            or die ("Fallo en la consulta");

                        mysqli_close($conexion);


                        if ($copiarFichero){
                            move_uploaded_file ($_FILES['imagen']['tmp_name'],$nombreDirectorio . $nombreFichero);
                        }

                        // Mostrar datos introducidos
                        print ("<H1>Gestion de noticias</H1>\n");
                        print ("<H2>Resultado de la insercion de nueva noticia</H2>\n");

                        print ("La noticia ha sido recibida correctamente:");
                        print ("<UL>");
                        print ("<LI>Titulo: " . $titulo);
                        print ("<LI>Texto: " . $texto);
                        print ("<LI>Categorca: " . $categoria);
                        print ("<LI>Fecha: " . date2string($fecha));

                        if ($nombreFichero != "")
                            print ("<LI>Imagen: <A TARGET='_blank' HREF='" . $nombreDirectorio . $nombreFichero . "'>" . $nombreFichero . "</A>");
                        else
                            print ("<LI>Imagen: (no hay)");

                        print ("</UL>");
                        print ("<BR>");
                        print ("[ <A HREF='inserta.php'>Insertar otra noticia</A> ]<br><br>");
                        print ("[ <A HREF='menu.php'>Volver al menu</A> ]");
                    }
                }else{
            ?>
            <H1>Insercion de nueva noticia</H1>
                <form action="inserta.php" class="borde" method="post" enctype="multipart/form-data">

                    Titulo*: <input type="text" name="titulo" size="50" maxlength="50"><br><br>

                    Texto*: <textarea cols="45" rows="5" name="texto"></textarea><br><br>

                    Categoria:<select name="categoria">
                        <option selected>promociones
                        <option>ofertas
                        <option>costas
                    </select><br><br>

                    Imagen: <input type="hidden" name="max_file_size" value="102400000">
                    <input type="file" size="44" name="imagen"><br><br>
                    <input type="submit" value="Insertar noticia" name="insertar">
                </form>
                <p>Nota: los datos marcados con (*) deben ser rellenados obligarotiamente</p><br>
                <a href='menu.php'><input type='button' value='Volver'></a>
        <?php
                } 
            }
        ?>
    </body>
</html>

