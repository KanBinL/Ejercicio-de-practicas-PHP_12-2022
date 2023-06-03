<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
            if(isset($_REQUEST['enviar'])){ 
        ?>
            <h1>Subida de ficheros. Resultados del formulario</h1>
            <h2>Resultado de la insercion de nueva noricia</h2>
        <?php
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

                $copiarFichero = false;        

                if(is_uploaded_file ($_FILES['imagen']['tmp_name'])){
                    $nombreDirectorio = "img/";
                    $nombreFichero = $_FILES['imagen']['name'];
                    $copiarFichero = true;
                    
                    $nombreCompleto = $nombreDirectorio . $nombreFichero;
                    if (is_file($nombreCompleto)){
                        $isUnico = time();
                        $nombreFichero = $idUnico . "-" . $nombreFichero;
                    }
                } else if($_FILES['imagen']['error'] == UPLOAD_ERR_FORM_SIZE){
                     $maxsize = $_REQUEST['max_file_size'];
                     $errores = $errores . " <li>El tamaño del fichero supera el limite permitido ($maxsize bytes)\n";
                } else if ($_FILES['imagen']['name'] == ""){
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
                    if ($copiarFichero){
                        move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreDirectorio . $nombreFichero);
                    }
                    print ("<P>La noticia ha sido recibida correctamente:</P>\n");
                    print ("<ul>\n");
                    print ("    <li>Titulo: $titulo\n");
                    print ("    <li>Texto: $texto\n");
                    print ("    <li>Categoria: $categoria\n");
                    
                    if($copiarFichero){
                        print ("<P>Imagen: <A TARGET='_black' href'" . $nombreDirectorio . $nombreFichero . "'>" . $nombreFichero . "</A\n>");
                    } else {
                        print (" <li>Imagen: (no hay)\n");
                    }
                    print ("</ul>\n");
                    
                    print ("<p>[ <a href='ejercicio.php'>Insertar otra noticia</a> ]</p>\n");
                }
            } else {
        ?>
            <h1>Subida de fichero</h1>

            <h2>Insertar nueva noticia</h2>
            <form action="ejercicio.php" class="borde" method="post" enctype="multipart/form-data">
                
                Titulo*: <input type="text" name="titulo" size="50" maxlength="50"><br><br>
                Texto*: <textarea cols="45" rows="5" name="texto"></textarea><br><br>
                Categoria:<select name="categoria">
                    <option selected>promociones
                    <option>noticia
                    <option>informe
                </select><br><br>
                Imagen: <input type="hidden" name="max_file_size" value="102400000">
                <input type="file" size="44" name="imagen"><br><br>
                <input type="submit" value="Enviar noticias" name="enviar">
            </form>
            
            <p>Nota: los datos marcados con (*) deben ser rellenados obligarotiamente</p>
            
        <?php
            }
        ?>
    </body>
</html>
