<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(isset($_REQUEST['enviar'])){
                $a = $_REQUEST['n1'];
                
                for ($i=1; $i<=12;$i++) {
                    $mostrar[$i] = $a % $i;
                    print ("El resto de ".$a." dividido por ".$i." es: ".$mostrar[$i]."<br>");
                }
            } else {
        ?>
            <form method="post">
                Introduce primer numero: <input type="text" name="n1"><br><br>
                <input type="submit" value="Calcular" name="enviar">
            </form>
        <?php
            }
        ?>
    </body>
</html>
