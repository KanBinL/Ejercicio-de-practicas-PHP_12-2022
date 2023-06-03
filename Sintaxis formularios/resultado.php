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
            $edad = $_REQUEST['edad'];
            print ("La edad es: $edad<br>");
            
            $cadena = $_REQUEST['cadena'];
            print "$cadena<br>";
        
            $sexo = $_REQUEST['sexo'];
            print ("$sexo<br>");
        
            $extras = $_REQUEST['extras'];
            foreach ($extras as $extras)
                print("$extras<br>");
        
            $username = $_REQUEST['username'];
            print ("$username<br>");
            
            $clave = $_REQUEST['clave'];
            print ("$clave<br>");
            
            /*$enviar = $_REQUEST['enviar'];
            if($enviar)
                print ("Se ha pulsado el boton de enviar<br>");*/
            
            $color = $_REQUEST['color'];
            print ("$color<br>");
        
            $idiomas = $_REQUEST['idiomas'];
            foreach ($idiomas as $idiomas)
                print("$idiomas<br\n>");
        
            $comentario = $_REQUEST['comentario'];
            print ($comentario);
        ?>
    </body>
</html>
