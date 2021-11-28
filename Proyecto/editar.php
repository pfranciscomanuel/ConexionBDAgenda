<?php 
include_once("conexion.php");
include_once("index.php");

$nombre = $_GET['nombre'];
 
$querybuscar = mysqli_query($conn, "SELECT * FROM amigo WHERE nombre='$nombre'");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $nombre = $mostrar['nombre'];
    $direccion = $mostrar['direccion'];
	$telCasa = $mostrar['telCasa'];
    $telCel = $mostrar['telCel'];
    $fechaNac = $mostrar['fechaNac'];
    $apodo = $mostrar['apodo'];
    $sexo = $mostrar['sexo'];
}
?>
<html>
<head>    
		<title>Editar</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Modificar usuario</th></tr>
		     <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtNombre"  value="<?php echo $nombre;?>" required ></td>
            </tr>
            <tr> 
                <td>Direccion</td>
                <td><input type="text" name="txtDireccion" value="<?php echo $direccion;?>" required></td>
            </tr>
            <tr> 
            <td>Teléfono Casa</td>
                <td><input type="text" name="txtTelCasa" value="<?php echo $telCasa;?>" required></td>
            </tr>
            <tr> 
                <td>Telefono Celular</td>
                <td><input type="text" name="txtTelCel" value="<?php echo $telCel;?>" required></td>
            </tr>
                <td>Fecha Nac</td>
                <td><input type="text" name="txtFechaNac" value="<?php echo $fechaNac;?>" required></td>
            </tr>
            <tr> 
                <td>Apodo</td>
                <td><input type="text" name="txtApodo" value="<?php echo $apodo;?>"required></td>
            </tr>
                <td>Sexo</td>
                <td><input type="text" name="txtSexo" value="<?php echo $sexo;?>" required></td>
            </tr>
            
            <tr>
				
                <td colspan="2">
				<a href="index.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar a este usuario?');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))
{    
    
    $nombre1 = $_POST['txtNombre'];
    $direccion1 = $_POST['txtDireccion'];
	$telCasa1 = $_POST['txtTelCasa'];
    $telCel1 = $_POST['txtTelCel'];
    $fechaNac1 = $_POST['txtFechaNac'];
    $apodo1 = $_POST['txtApodo'];
    $sexo1 = $_POST['txtSexo'];

    $querymodificar = mysqli_query($conn, "UPDATE amigo SET nombre='$nombre1',direccion='$direccion1',telCasa='$telCasa1', telCel='$telCel1', fechaNac='$fechaNac1' , apodo='$apodo1',sexo='$sexo1' WHERE nombre='$nombre1'");

    
  	echo "<script>window.location= 'index.php' </script>";
    
}
?>
	