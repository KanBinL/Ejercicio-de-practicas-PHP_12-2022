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
            $n = $_REQUEST['n'];
            $t = $_REQUEST['t'];
            printf("%'*12.2f Euros",$n);
            $nt = strlen($t);
            print (nl2br("<br>".strtoupper(substr($t,0,10)).strtolower(substr($t,10))));
        ?>
    </body>
</html>
