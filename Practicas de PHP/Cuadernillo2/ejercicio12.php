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
                $b = $_REQUEST['n2'];
                $c = $a+$b;
                
                
                print (" 
                    Calculo de los numeros<br><br>
                    Sumar: ".number_format($a+$b,4,"."," ")."<br>
                    Restar: ".number_format($a-$b,4,"."," ")."<br>
                    Multiplicar: ".number_format($a*$b,4,"."," ")."<br>
                    Dividir: ".number_format($a/$b,4,"."," ")."<br>
                    Redondeado cuarta potencia: ".number_format(ceil(pow($c,4)),4,"."," ")."<br>
                    Redondeado a raíz quinta del cubo: ".number_format(ceil(sqrt($c)),4,"."," ")."
                ");
            } else {
        ?>
            <form method="post">
                Introduce primer numero: <input type="text" name="n1"><br><br>
                Introduce segundo numero: <input type="text" name="n2"><br><br>
                <input type="submit" value="Calcular" name="enviar">
            </form>
        <?php
            }
        ?>
    </body>
</html>
