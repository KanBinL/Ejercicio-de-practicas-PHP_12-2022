<?php 
        //Dato
	$host = "localhost";
	$basededatos = "lindavista";
	$usuariodb = "root";
	$clavedb = "";
        
	// Hacer la conexion, cuando no hay salta un erro;
        $conexion = mysqli_connect($host, $usuariodb, $clavedb, $basededatos)
            or die ("No se puede conectar con el servidor");
?>