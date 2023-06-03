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
            $hora_a = date("Y/n/j h:i:s");
            
            $f = fopen("ejercicio28.txt","a+");
            $f1 = fopen("ejercicio28.txt","r+");
            $dato = fgetc($f1);
            if($dato == null){
                fputs($f, "Esta es la primera vez que accedes a esta pagina $hora_a<br>");
                fclose($f1);
            } else {
                fputs($f, "$hora_a<br>");
                fclose($f1);
            }
            fclose($f); 
            include 'ejercicio28.txt';
        ?>
    </body>
</html>
