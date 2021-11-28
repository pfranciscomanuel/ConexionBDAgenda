<?php include_once("conexion.php"); 
    
	$nombre = $_POST['txtNombre'];
    $direccion = $_POST['txtDireccion'];
	$telCasa = $_POST['txtTelCasa'];
    $telCel = $_POST['txtTelCel'];
    $fechaNac = $_POST['txtFechaNac'];
    $apodo = $_POST['txtApodo'];
    $sexo = $_POST['txtSexo'];

    
	mysqli_query($conn, "INSERT INTO amigo(nombre,direccion,telCasa,telCel,fechaNac,apodo,sexo) VALUES('$nombre','$direccion','$telCasa','$telCel','$fechaNac','$apodo','$sexo')");
    
header("Location:index.php");
	

?>
