<?php
session_start();
$usuario = $_REQUEST['l_usuario'];
$pass = $_REQUEST['l_pass'];

$ftpHost   = 'MI_IP';
$ftpUsername = $usuario;
$ftpPassword = $pass;

$connId = ftp_connect($ftpHost) or die("Couldn't connect to $ftpHost");

if(isset($_REQUEST["Descargar"])){
    include("./lib/abrir_conexion.php");

    $ftpLogin = ftp_login($connId, $ftpUsername, $ftpPassword);

    $localFilePath  = 'index.php';
    $remoteFilePath = 'public_html/index.php';

    if(ftp_get($connId, $localFilePath, $remoteFilePath, FTP_BINARY)){
        echo "File transfer successful - $localFilePath";
    }else{
        echo "There was an error while downloading $localFilePath";
    }

    ftp_close($connId);
}

if(isset($_REQUEST["Subir"])){
    include("./lib/abrir_conexion.php");


    $ftpLogin = ftp_login($connId, $ftpUsername, $ftpPassword);

    $localFilePath  = 'index.php';
    $remoteFilePath = 'public_html/index.php';

    if(ftp_put($connId, $remoteFilePath, $localFilePath, FTP_ASCII)){
        echo "File transfer successful - $localFilePath";
    }else{
        echo "There was an error while uploading $localFilePath";
    }

    ftp_close($connId);
}

if(isset($_REQUEST["Eliminar"])){
    include("./lib/abrir_conexion.php");

    // login to FTP server
    $ftpLogin = ftp_login($connId, $ftpUsername, $ftpPassword);

    // server file path
    $file = 'public_html/index_old.php';

    // try to delete file on server
    if(ftp_delete($connId, $file)){
        echo "$file deleted successful";
    }else{
        echo "There was an error while deleting $file";
    }

    // close the connection
    ftp_close($connId);
}