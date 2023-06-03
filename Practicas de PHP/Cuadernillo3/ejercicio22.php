<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $c = 0;
            print "<table border='1'> <tr>";
            while($c < 255)
            {
                print "<td style='background-color: rgb($c, $c, $c);'>*</td>";
                $c = $c + 5;
            }
            print "</tr></table>";
        ?>
    </body>
</html>