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
        <form action="guardar.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="max_file_size" value="102400000">
            <input type="file" size="44" name="imagen">
            <input type="submit" value="enviar" name="enviar">
        </form>
    </body>
</html>
