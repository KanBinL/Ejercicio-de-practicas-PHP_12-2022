<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(isset($_REQUEST['enviar'])){

                $nombre = $_REQUEST['nombre'];
                $sexo = $_REQUEST['sexo'];
                $edad = $_REQUEST['edad'];
                $idioma = $_REQUEST['idioma'];
                $idioma1 = "";
                foreach ($idioma as $idioma){
                    $idioma1 = $idioma1 . "$idioma";
                }
                $repetir = $_REQUEST['repetir'];
                $curso = $_REQUEST['curso'];
                $comentario = $_REQUEST['comentario'];
                $nombre_f = $_REQUEST['nombre_f'];

                $f = fopen("dato29/ejercicio29.txt","w+");
                print ("Se ha guardado:<br><br>");
                fputs($f, "Nombre: $nombre<br><br>");
                fputs($f, "Sexo: $sexo<br><br>");
                fputs($f, "Edad: $edad<br><br>");
                fputs($f, "Idioma:<br> $idioma1<br><br>");
                fputs($f, "Repetido: $repetir<br><br>");
                fputs($f, "Curso elegido: $curso<br><br>");
                fputs($f, "Comentario:<br> $comentario<br><br>");
                
                fclose($f); 
                include 'dato29/ejercicio29.txt';
                
                if(is_uploaded_file ($_FILES['imagen']['tmp_name'])){
                    $nombreDirectorio = "dato29/";
                    $idUnico = date("Y-n-j-h-i-s");
                    $nombreFichero = $nombre_f;

                    move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreDirectorio . $nombreFichero);
                    print ("Se ha guardado correctamente la foto en ".$nombreDirectorio); 
                } else {
                    print ("No se ha podido subir el fichero/imagen<br>"); 
                }
            } else {
        ?>
            <form method="post" enctype="multipart/form-data">
                <center>
                    Tu nombre: <br>
                    <input type="text" name="nombre"><br><br>

                    Sexo: <br>
                    <input type="radio" name="sexo" value="M" checked>Mujer
                    <input type="radio" name="sexo" value="H">Hombre<br><br>

                    Edad: <br>
                    <input type="text" name="edad"><br><br>

                    Idioma: <br>
                    <input type="checkbox" name="idioma[]" value="Ingles<br>">Ingles
                    <input type="checkbox" name="idioma[]" value="Frances<br>">Frances
                    <input type="checkbox" name="idioma[]" value="Español" checked>Español<br><br>

                    Repetido: <br>
                    <input type="radio" name="repetir" value="N" checked>no
                    <input type="radio" name="repetir" value="S">si<br><br>

                    Curso elegido: <br>
                    <select name="curso">
                        <option value="PHP" selected>PHP
                        <option value="JAVA">JAVA
                        <option value="Javascript">Javascript
                    </select><br><br>

                    Comentario: <br>
                    <textarea cols="50" rows="4" name="comentario">
                    </textarea><br><br>

                    Subir Foto:<br>
                    <input type="hidden" name="max_file_size" value="102400000">
                    <input type="file" size="44" name="imagen"><br>
                    Nombre de la foto: <br>
                    <input type="text" name="nombre_f"><br><br>
                    
                    <input type="submit" value="Enviar" name="enviar">
                </center>
                <style>
                    body {
                        background-color: grey;
                    }
                </style>
            </form>
        <?php
            }
        ?>
    </body>
</html>
