
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                $r = $_REQUEST['r'];
                $r1 = $_REQUEST['r1'];

                echo "Resultado de 1x1: ";
                if($r == "v"){
                    echo "Bien<br><br>";
                } else {
                    echo "Mal<br><br>";
                }

                echo "Resultado de 1+1: ";
                if($r1 == "v"){
                    echo "Bien";
                } else {
                    echo "Mal";
                }
        ?>
    </body>
</html>