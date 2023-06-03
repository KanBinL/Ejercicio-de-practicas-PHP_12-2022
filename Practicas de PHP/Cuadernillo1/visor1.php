<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $nombre = $_REQUEST['nombre'];
        
            $sexo = $_REQUEST['sexo'];
            
            $edad = $_REQUEST['edad'];
        
            $idioma = $_REQUEST['idioma'];
            $idioma1 = "";
            foreach ($idioma as $idioma){
                $idioma1 = $idioma1 . "$idioma";
            }
                
            $repetir = $_REQUEST['repetir'];

            $curso = $_REQUEST['curso'];
            
            $comentario = $_REQUEST['comentario'];
            
            print ("
                <center>
                    <table align='center' border='1'>
                        <tr>
                            <th colspan='2'>Informacion de ".$nombre."</th>
                        </tr>
                        <tr>
                            <td>Sexo</td>
                            <td>".$sexo."</td>
                        </tr>
                        <tr>
                            <td>Edad</td>
                            <td>".$edad."</td>
                        </tr>
                        <tr>
                            <td>Idioma</td>
                            <td>".$idioma1."</td>
                        </tr>
                        <tr>
                            <td>Repetido</td>
                            <td>".$repetir."</td>
                        </tr>
                        <tr>
                            <td>Curso</td>
                            <td>".$curso."</td>
                        </tr>
                        <tr>
                            <td>Comentario</td>
                            <td>".$comentario."</td>
                        </tr>
                    </table>
                </center>
                <style>
                    body {
                        background-color: grey;
                    }
                    table {
                        background-color: white;
                    }
                </style>                
            ");
        ?>
    </body>
</html>
