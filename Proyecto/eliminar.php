<?php
include_once("conexion.php");
 
$nombre = $_GET['nombre'];
 
mysqli_query($conn, "DELETE FROM amigo WHERE nombre='$nombre'");
 
header("Location:index.php");

?>