<?php
function d(){
    $bbdd = 'eagle_0000001363_sprub';
    $server = '91.31.1.5';
    $user = 'INTRANET';
    $password = 'Amb2013+';
    $conexion = mysqli_connect($server,$user,$password,$bbdd) or die('Error al conectar a la base de datos.');
    //print mysqli_get_server_info($connect);
    return $conexion;
}
?>