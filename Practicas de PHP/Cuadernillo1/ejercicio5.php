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
            $dato="1";
            print "El primer valor es: " . $dato;
            $dato="2";
            print "<br>El valor modificado es: " . $dato;
            
            function prueba(){
                $dato="3";
                print "<br>El valor dentro del función es: " . $dato;
            }
            print prueba();
            print "<br>El valor fuera del función es: " . $dato;
        ?>
    </body>
</html>
