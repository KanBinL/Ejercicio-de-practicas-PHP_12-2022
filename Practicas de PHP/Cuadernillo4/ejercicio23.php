<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            print "<table border='1'>";
            $c = 1;
            for($i = 1; $i <= 5; $i++){
                print "<tr>";
                for($u = 1; $u <= 7; $u++){
                    print "<td>$c</td>";
                    $c += 1;
                }
                print "</tr>";
            }
            print "</table>";
        ?>
    </body>
</html>