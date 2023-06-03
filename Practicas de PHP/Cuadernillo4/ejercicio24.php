<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $a = 0;
            $b = 7;
            $random = rand(1,49);
            $arr[] = $random;
            print "<table border='1'>";
            print "<tr>";
            while ($a < $b){
                $random = rand(1,49);
                $c = false;
                while(!$c) {
                    for($i=0; $i<$a; $i++){
                        if($random==$arr[$i]){
                            $c = true;
                        }
                    }

                    if(!$c){
                        $arr[$i] = $random;
                        $a++;
                    }
                }
            }

            for($i=0; $i<  count($arr); $i++){
                print "<td>$arr[$i]</td>";
            }

            print "</tr>";
            print "</table>";
        ?>
    </body>
</html>