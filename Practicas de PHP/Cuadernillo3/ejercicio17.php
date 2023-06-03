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
            $a = 1;
            $b = 5;
            
            if ($b == $a){
                print ("Es igual<br>");
            }else{
                print ("No es igual<br>");
            };
            
            if ($b === $a){
                print ("Es igual tipo y valor<br>");
            }else{
                print ("No es igual valor o tipo<br>");
            };
            
            if ($b != $a){
                print ("No es igual<br>");
            }else{
                print ("Es igual<br>");
            };
            
            if ($b < $a){
                print ("b es mas menor que a<br>");
            }else{
                print ("b es mas grande que a<br>");
            };
            
            if ($b <= $a){
                print ("b es menor o igual que a<br>");
            }else{
                print ("b es mas grande que a<br>");
            };
            
            if ($b > $a){
                print ("b es mas grande que a<br>");
            }else{
                print ("b es menor que a<br>");
            };
            
            if ($b >= $a){
                print ("b es mas grande o igual que a<br>");
            }else{
                print ("b es menor que a<br>");
            };
        ?>
    </body>
</html>
