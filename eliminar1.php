<?php
$nom=$_GET["nombre"];

$conexion=new mysqli("localhost","root","","pasteleria");

if($conexion->connect_errno){
  echo "Fallo la conexión".$conexion->connect_errno;
} 
  $conexion->set_charset("utf8");
  $consulta="DELETE FROM formulario WHERE(nombre=$nom)";
  $resultados=mysqli_query($conexion,$consulta);

  if($resultados=false){
    echo"error";

  }else
  {
echo "Pedido eliminado correctamente.";
 
  }

  $conexion->close();
?>