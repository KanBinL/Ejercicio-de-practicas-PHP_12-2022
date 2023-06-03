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
            /*phpinfo();*/
            //Sacar infomacion de php
            
            
            echo '<h3>Sacar informacion multiplicado</h3>';
            echo 'Hola mundo<br>';
            function duplicar($var) {
                $temp = $var * 2;
                return $temp;
            }
            $variable = 5;
            $contenido = duplicar($variable);
            echo "El valor la variable \$temp es: $contenido<br><br>";
            
            
            echo '<h3>Sacar informacion sobre sexo</h3>';
            $sexo = "M";
            $nombre = "Ana";
            if ($sexo == "M"){ 
                $saludo = "Bienvenida, mujer "; 
            } else { 
                $saludo = "Bienvenido, hombre ";
            }
            $saludo = $saludo . $nombre; 
            print ("$saludo <br><br>");
            
            
            echo '<h3>Sacar informacion sobre exension</h3>';
            $extension = "PDF";
            switch ($extension){ 
                case ("PDF"): 
                    $tipo = "Documento Adobe PDF";
                    break; 
                case ("TXT"): 
                    $tipo = "Documento de texto";
                    break; 
                case ("HTML") : 
                    $tipo = "Documento HTML";
                    break; 
                case ("HTM"): 
                    $tipo = "Documento HTM";
                    break; 
                default: 
                    $tipo = "Archivo" . $extension;
            }
            print ("$tipo <br><br>");
            
            
            echo '<h3>Sacar elemetos en lista con while</h3>';
            print ("<UL>\n");
            $i=1;
            while ($i <= 5){
               print ("<LI>Elemento $i</LI>\n");
               $i++;
            }
            print ("</UL> \n<br><br>");
            
            
            echo '<h3>Sacar elemetos en lista con for</h3>';
            print ("<UL>\n");
            for ($a=1;$a <= 5;$a++){
               print ("<LI>Elemento $a</LI>\n");
            }
            print ("</UL> \n<br><br>");
            
            
            echo '<h3>Sacar multiple en lista con while</h3>';
            $b = 1;
            while ($b <= 10){
               $res = 5 * $b;
               print ("5 * $b = $res<br>");
               $b++;
            }
            echo '<br><br>';
            
            
            echo '<h3>Sacar funcion de suma</h3>';
            function suma ($x, $y){
                $s = $x + $y;
                return $s;
            }
            $q=1;
            $w=2;
            $c=suma($q, $w);
            print $c;
            echo '<br><br>';
            
            
            echo '<h3>Sacar multiple de 7 en lista con while</h3>';
            function tabla ($num){
                $i=1;
                print ("<table>");
                while ($i <= 10){
                    $res = $num * $i;
                    print ("<tr><td>$num * $i</td><td>$res</td></tr>");
                    $i++;
                }
                print ("</table>");
            }
            $num = 7;
            $e = tabla(7);
            print $e;
            echo '<br><br>';
            
            
            echo '<h3>Sacar funcion incremento de 1</h3>';
            function incrementa (&$a) {
                $a = $a + 1; 
            }
            $a=1; 
            incrementa ($a); 
            print $a; // Muestra un 2
            echo '<br><br>';
            
            
            echo '<h3>Sacar funcion para mostrar nombre con dos parametros</h3>';
            function muestranombre ($nombre, $titulo="sr."){
                print "Estimado $titulo $nombre <br>";
            }
            muestranombre("Fada");
            muestranombre("fafa", "prr");
            echo '<br><br>';
            
            
            echo '<h3>Guardar array por color</h3>';
            $color = array ('rojo'=>101, 'verde'=>51, 'azul'=>255); 
            $medidas = array (10, 25, 15);
            print($color['rojo']); //No olvidar las comillas 
            print("<br>".$medidas[0]);
            echo '<br><br>';
            
            
            echo '<h3>Corre valor por foreach</h3>';
            foreach ($color as $valor){
                print "valor: $valor<br>\n";
            }
            foreach ($color as $clave => $valor){
                print "Clave: $clave; Valor: $valor<br>\n";
            }
            echo '<br><br>';
            
            
            echo '<h3>Sacar fechas por metodos</h3>';
            $fecha = date("j/n/Y H:i");
            print "$fecha";
            $fecha1 = date("j/n/Y", strtotime("5 april 2001"));
            print "$fecha1";
        ?>
    </body>
</html>
