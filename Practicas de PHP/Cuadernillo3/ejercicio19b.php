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
            $n = $_REQUEST['n'];
            if($n>0){
                print ($n." es positivo");
            } elseif ($n<0) {
                print ($n." es negativo");
            } else {
                print ($n." es cero");
            }
        ?>
        <a href="ejercicio19a.php"><input type="submit" value="Volver"></a>
    </body>
</html>
