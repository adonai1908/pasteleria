<?php
$conexion=new mysqli("localhost", "root", "", "pasteleria");
if ($conexion->connect_errno) {
    echo "Fallo la conexion: ".$conexion->connect_errno;
}
$conexion->set_charset("utf8");

$sql="INSERT INTO pasteleria,formulario('nombre','pastel','cantidad','mensaje','direccion') VALUES('Adonai','Vainilla','2','holaa','la casa de marlen( pa q se la pedreen)')";
//$resultado = $conexion->query($sql);

    if($conexion->query($sql)===true){
        echo "Registro Insertado ";
        die($conexion->error);
    }else{
        echo"Error al insertar";
    }
$conexion->close();
?>