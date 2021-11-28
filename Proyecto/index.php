<?php
include_once("conexion.php"); 
?>

<html>
<head>    
		<title>Agenda</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
	    <img src="LOGO_TECNM_BLANCO.svg">
			<div id="barrabuscar">
		<form method="POST">
		<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Ingresar nombre de amigo">
		</form>
		</div>
			<tr><th colspan="8"><h1>LISTAR AMIGOS</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		    <th>Nro</th>
			<th>Nombre</th>
            <th>Direccion</th>
            <th>TelCasa</th>
            <th>TelCel</th>
            <th>FechaNac</th>
            <th>Apodo</th>
            <th>Sexo</th>
            <th>Acciones</th>
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryamigo = mysqli_query($conn, "SELECT nombre,direccion,telCasa,telCel,fechaNac,apodo,sexo FROM amigo where nombre like '".$buscar."%'");
}
else
{
$queryamigo = mysqli_query($conn, "SELECT * FROM amigo ORDER BY nombre asc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryamigo)) 
		{   
            
            $numerofila++;    
            echo "<tr>";
			echo "<td>".$numerofila."</td>";
            echo "<td>".$mostrar['nombre']."</td>";
            echo "<td>".$mostrar['direccion']."</td>";
            echo "<td>".$mostrar['telCasa']."</td>";    
			echo "<td>".$mostrar['telCel']."</td>";
            echo "<td>".$mostrar['fechaNac']."</td>";
            echo "<td>".$mostrar['apodo']."</td>";
            echo "<td>".$mostrar['sexo']."</td>";     
            echo "<td style='width:26%'><a href=\"editar.php?nombre=$mostrar[nombre]\">Modificar</a> | <a href=\"eliminar.php?nombre=$mostrar[nombre]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[nombre]?')\">Eliminar</a></td>";           
        }
        ?>
    </table>
	 <script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "block";
  
}

function cancelarform() {
  document.getElementById("formregistrar").style.display = "none";
}

</script>
<div class="caja_popup" id="formregistrar">
  <form action="agregar.php" class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2">Nuevo usuario</th></tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtNombre" required></td>
            </tr>
            <tr> 
                <td>Direccion</td>
                <td><input type="text" name="txtDireccion" required></td>
            </tr>
            <tr> 
                <td>Teléfono Casa</td>
                <td><input type="text" name="txtTelCasa" required></td>
            </tr>
            <tr> 
                <td>Telefono Celular</td>
                <td><input type="text" name="txtTelCel" required></td>
            </tr>
            <tr> 
                <td>Fecha Nac</td>
                <td><input type="text" name="txtFechaNac" required></td>
            </tr>
            <tr> 
                <td>Apodo</td>
                <td><input type="text" name="txtApodo" required></td>
            </tr>
            <tr> 
                <td>Sexo</td>
                <td><input type="text" name="txtSexo" required></td>
            </tr>
            <tr> 	
               <td colspan="2">
				   <button type="button" onclick="cancelarform()">Cancelar</button>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar a este usuario?');">
			</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

