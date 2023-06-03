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
            if(isset($_REQUEST['enviar'])){
                function login ($login, $clave){
                     if($login == "pepe" && $clave = "pepe"){
                         return true;
                    } else {
                        return false;
                    }
                }

                $login = $_REQUEST['login'];
                $clave = $_REQUEST['clave'];


                if(login($login,$clave)){
                    print "Es correcto";
                } else {
                    print "No es correcto";
                }
            } else {
        ?>
            <form method="post">
                Nombre:<input type="text" name="login"><br><br>
                Contraseña: <input type='password' name='clave'><br><br>
                <input type="submit" value="enviar" name="enviar">
            </form>
        <?php
            }
        ?>
    </body>
</html>
