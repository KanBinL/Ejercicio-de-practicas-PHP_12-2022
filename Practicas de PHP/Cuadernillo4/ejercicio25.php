<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $arr[0][0] = "Alumno1";
            $arr[0][1] = rand(1,10);
            $arr[0][2] = rand(1,10);
            $arr[0][3] = rand(1,10);
            
            $arr[1][0] = "Alumno2";
            $arr[1][1] = rand(1,10);
            $arr[1][2] = rand(1,10);
            $arr[1][3] = rand(1,10);

            $arr[2][0] = "Alumno3";
            $arr[2][1] = rand(1,10);
            $arr[2][2] = rand(1,10);
            $arr[2][3] = rand(1,10);
            
            $arr[3][0] = "Alumno4";
            $arr[3][1] = rand(1,10);
            $arr[3][2] = rand(1,10);
            $arr[3][3] = rand(1,10);
            
            $arr[4][0] = "Alumno5";
            $arr[4][1] = rand(1,10);
            $arr[4][2] = rand(1,10);
            $arr[4][3] = rand(1,10);
            
            echo "<table border='1'>" . 
                "<th>Nombre</th>" . 
                "<th>Biologia</th>" . 
                "<th>Fisica</th>" . 
                "<th>Latin</th>";
            
            for($i=0; $i<5; $i++){
                echo "<tr><td>" . $arr[$i][0] . "</td>" . 
                "<td>" . $arr[$i][1] . "</td>" . 
                "<td>" . $arr[$i][2] . "</td>" .
                "<td>" . $arr[$i][3] . "</td>";
            }
            echo "</tr></table>";
            ?>
    </body>
</html>