<?php
$host_db="127.0.0.1:3306";
$user_db="root";
$pass_db="040411";
$db_name="proyectofinal";

// $host_db="ftpupload.net";
// $user_db="if0_37742823";
//$pass_db="nwA7NKSNKe";
//$db_name="if0_37742823_proyectofinal";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>
