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
        <form action="visor1.php" method="post">
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
                    <option value="PHP<br>" selected>PHP
                    <option value="JAVA<br>">JAVA
                    <option value="Javascript<br>">Javascript
                </select><br><br>

                Comentario: <br>
                <textarea cols="50" rows="4" name="comentario">
                </textarea><br><br>

                <input type="submit" value="Enviar">
            </center>
            <style>
                body {
                    background-color: grey;
                }
            </style>
        </form>
    </body>
</html>
