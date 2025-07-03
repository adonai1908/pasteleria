<?php
$nom=$_GET["nombre"];
$past=$_GET["pastel"];
$cant=$_GET["cantidad"];
$men=$_GET["mensaje"];
$dir=$_GET["direccion"];

$conexion = new mysqli("localhost", "root", "", "pasteleria");

if ($conexion->connect_errno) {
  echo "Fallo la conexión".$conexion->connect_errno;
}  
  $conexion->set_charset("utf8");

  $consulta = "INSERT INTO formulario(nombre,pastel,cantidad,mensaje,direccion)  VALUES('$nom','$past','$cant','$men','$dir')";
  
  $resultados = mysqli_query($conexion, $consulta);
  if($resultados=false){
    echo "error en la consulta";
  }else
  {
    echo "registro guardado<br><br>";
    
    echo"<table><tr> <td> $nom<td><tr>";
    echo"<table><tr> <td> $past <td><tr>";
     echo"<table><tr> <td> $cant <td><tr>";
    echo"<table><tr> <td> $men <td><tr>";
    echo"<table><tr> <td> $dir <td><tr>";
   
  
  }
  
  $conexion->close();

?>

