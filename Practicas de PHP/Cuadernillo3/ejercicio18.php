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
            $langosta = 54;
            $angula = 300;
            $caviar = 400;
            
            if($langosta>50 || $langosta>70 || $langosta>500){
                if($angula>50 || $angula>70 || $angula>500 || $caviar>50 || $caviar>70 || $caviar>500){
                    print true;
                }
                print false;
            };
        ?>
    </body>
</html>
