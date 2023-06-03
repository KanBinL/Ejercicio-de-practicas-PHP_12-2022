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
        <form action="resultado.php" method="post">
            Edad: <input type="text" name="edad"><br><br>
            
            Introduzca la cadena a buscar: 
            <input type="text" name="cadena" value="valor por defecto" size="20"><br><br>
            
            Sexo:
            <input type="radio" name="sexo" value="M" checked>Mujer
            <input type="radio" name="sexo" value="H">Hombre<br><br>
            
            <input type="checkbox" name="extras[]" value="garaje" checked>Garaje
            <input type="checkbox" name="extras[]" value="piscina" checked>Piscina
            <input type="checkbox" name="extras[]" value="jardin" checked>Jardin<br><br>
                        
            <?php
                $username = "pepe";
                print ("<input type='hidden' name='username' value='$username'><br>\n");
            ?>
            
            Contraseña: <input type='password' name='clave'><br><br>
            
            <!--<input type="submit" name="enviar" value="Enviar datos"><br><br>-->
            
            color:
            <select name="color">
                <option value="rojo" selected>Rojo
                <option value="verde">Verde
                <option value="azul">Azul
            </select><br><br>
            
            Idiomas:
            <select multiple size="3" name="idiomas[]">
                <option value="ingles" selected>Ingles
                <option value="frances">Frances
                <option value="aleman">Aleman
                <option value="holandes">Holandes
            </select><br><br>
            
            Comentario:
            <textarea cols="50" rows="4" name="comentario">
            Este libro me parece ...
            </textarea><br><br>
            
            <input type="submit" value="aceptar">
        </form>
    </body>
</html>
