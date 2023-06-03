<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $r = $_REQUEST['r'];
            echo "Resultado: ";
            if($r == "v"){
                echo "Bien";
            } else {
                echo "Mal";
            }
        ?>
    </body>
</html>