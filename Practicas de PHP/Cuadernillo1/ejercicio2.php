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
            /* Las instrucciones PHP son las que aparecen en rojo.
             Las etiquetas en azul intenso son el código HTML.
             Todo lo que aparece en este color son líneas de comentario
             de las que hablaremos más adelante
             Cuando rescribas estos primeros scripts
             bastará que incluyas las instrucciones escritas en rojo */
            /* ponemos <br> al final del texto para que cuando se
            aparecerá en una línea diferente */
            # aquí utilizamos solo unas comillas
            print "Este texto solo lleva las comillas de la instrucción<br>";
            # aquí anidaremos comillas de distinto tipo
            print "La palabra 'comillas' aparecerá entrecomillada<br>";
            # esta es otra posibilidad invirtiendo el orden de las comillas
            print ('La palabra "comillas" aparecerá entrecomillada<br>');
            # una tercera posibilidad en la que utilizamos un mismo
            # tipo de comillas. Para diferenciar unas de otras anteponemos
            # la barra invertida, pero esta opción no podríamos utilizarla
            # al revés. 
            # No podríamos poner \" en las comillas exteriores.
            print ("La palabra \"comillas\" usando la barra invertida<br>");
        ?>
    </body>
</html>
