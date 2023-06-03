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
            $body = "body<br> La etiqueta body de HTML representa el contenido de un documento HTML. Solo puede haber un elemento body en un documento.<br><br>";
            $head = "head<br> La etiqueta head provee información general (metadatos) acerca del documento, incluyendo su título y enlaces a scripts y hojas de estilos.<br><br>";
            $html = "html<br> La etiqueta html (o elemento HTML raiz) representa la raiz de un documento HTML. El resto de elementos descienden de este elemento.";
            
            $mostrar = $body . $head;
            $mostrar .= $html;
            print $mostrar;
        ?>
    </body>
</html>
