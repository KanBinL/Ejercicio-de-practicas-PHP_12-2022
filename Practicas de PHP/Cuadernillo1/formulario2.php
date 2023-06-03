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
        <form action="visor2.php" method="post">
            <center>
                Tu nombre: <br>
                <input type="text" name="nombre"><br><br>

                Tu apellido: <br>
                <input type="text" name="apellido"><br><br>
                
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
                
                Que signatura te gusta estudiar: <br>
                <select name="estudiar">
                    <option value="EIE" selected>EIE
                    <option value="DAW">DAW
                    <option value="DIW">DIW
                    <option value="DWES">DWES
                    <option value="DWEC">DWEC
                </select><br><br>

               Que te gustaria trabajar de futuro: <br>
                <select multiple size="3" name="trabajar[]">
                    <option value="Programador" selected>Programador
                    <option value="Diseñador">Diseñador
                    <option value="aleman">Aleman
                    <option value="holandes">Holandes
                </select><br><br>
                
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
