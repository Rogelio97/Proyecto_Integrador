<?php
include('conexion.php');
$con = conexion();
  $resultado = $con->query("SELECT aciertos_espanol FROM usuarios");
  $datos = array();
  while ($row = $resultado->fetch_row()){
   $datos[] = $row;
  }
  echo json_encode($datos);

?>
