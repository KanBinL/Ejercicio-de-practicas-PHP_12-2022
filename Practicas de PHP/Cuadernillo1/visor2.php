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
            $nombre = $_REQUEST['nombre'];
            
            $apellido = $_REQUEST['apellido'];
            
            $sexo = $_REQUEST['sexo'];
            
            $edad = $_REQUEST['edad'];
        
            $idioma = $_REQUEST['idioma'];
            $idioma1 = "";
            foreach ($idioma as $x){
                $idioma1 = $idioma1 . "$x";
            }
                
            $repetir = $_REQUEST['repetir'];

            $curso = $_REQUEST['curso'];
            
            $comentario = $_REQUEST['comentario'];
            
            $estudiar = $_REQUEST['estudiar'];
            
            $trabajar1 = $_REQUEST['trabajar'];
            $cadenaTrabajar ="";
            foreach ($trabajar1 as $trabajar){
                $cadenaTrabajar = $cadenaTrabajar . "$trabajar<br>";
            }
            
            print ("
                <center>
                    <table align='center' border='1'>
                        <tr>
                            <th colspan='2'>Informacion de ".$nombre." ".$apellido."</th>
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
                        <tr>
                            <td>Signatura favorito</td>
                            <td>".$estudiar."</td>
                        </tr>
                        <tr>
                            <td>Trabajo pensado</td>
                            <td>".$cadenaTrabajar."</td>
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
