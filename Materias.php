<?php
session_start();
$pagina="admin";
include("Config.php");
include("validacion_sesion.php");
$sql = "SELECT * FROM `usuarios` WHERE  id='$_SESSION[Id]' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
}
?>
<!doctype html>
<html>
<head>
    <?php
        include ('head.php');
    ?>
<title>Documento sin título</title>
</head>

<body>	
	<?php
       include ('header.php');
	?>  
<div class="container registro">
 <a href="InicioAdmin.php"><i class="material-icons">keyboard_return</i></a>
	<h1 class="fuente1 center">Tabla de Materias</h1>
</div>
<?php

$sql = "SELECT * FROM `usuarios` ";
$sql = "SELECT * FROM `materias` ";	
$result = $conn->query($sql); 
?> <div class="container form_admin">
<?php
echo "<table>
        <thead>
          <tr>
              <th>ICONO MATERIA</th>
              <th>ID MATERIA</th>
			  <th>FOTO PROFESOR</th>
              <th>ID DE PROFESOR</th>
              <th>NOMBRE DEL PROFESOR ASIGNADO</th>
          </tr>
        </thead>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 
    echo    " <tbody>
          <tr>
            <td><img src='Imagenes perfil/".$row["Imagen_materia"]."' class='responsive-img' width='60'></td>
            <td>".$row["Id_materia"]."</td>
            <td><img src='Imagenes perfil/".$row["foto"]."' class='responsive-img' width='60'></td>
            <td>".$row["Id_profesor"]."</td>
            <td>".$row["nombre"]."</td>
			<td>".$row["apellido"]."</td>
			<td> <a href='editar.php?var=".$row["id"]."'><i class='material-icons'>create</i></a></td>
			<td> <a href='eliminar.php?var=".$row["id"]."'><i class='material-icons'>delete</i></a></td>
        </tbody>";    

	}

}
echo "</table>"; 

	?> </div>
       
</body>          
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript">
	 M.AutoInit();
$(".dropdown-trigger").dropdown();
	$(document).ready(function(){
    $('.datepicker').datepicker();
  });
      	
		
		</script>
</html>
