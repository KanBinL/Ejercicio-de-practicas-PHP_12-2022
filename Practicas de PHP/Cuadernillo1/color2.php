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
            $color = $_REQUEST['color'];
            
            print ("
                <div></div>
                <style type='text/css'>
                    * { margin: 0; padding: 0; }
                    body {background-color: ".  $color .";}
                </style>");
        ?>
    </body>
</html>
