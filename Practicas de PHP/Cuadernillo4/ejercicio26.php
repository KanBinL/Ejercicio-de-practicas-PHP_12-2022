<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function a($filas, $columnas)
            {
                $c = 0;
                print "<table border = '1'>";
                for($i = 1; $i <= $columnas; $i++){
                    print "<tr>";
                    for($u = 1; $u <= $filas; $u++){
                        print "<td>$c</td>";
                        $c += 1;
                    }
                    print "</tr>";
                }
                print "</table>";
            }
            a(7,4);
        ?>
    </body>
</html>