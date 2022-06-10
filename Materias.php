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
<title>Materias</title>
</head>

<body class="materiastabla">	
	<?php
       include ('header.php');
	?>  
<div class="container registro">
 <a href="InicioAdmin.php"><i class="material-icons">keyboard_return</i></a>
	<h1 class="fuente1 center">Tabla de Materias</h1>
</div>
<?php

$sql = "SELECT Ma.Id_materia, Ma.Imagen_materia, Ma.Nombre_materia, Ma.Id_profesor, U.id, U.foto, U.nombre ,U.apellido FROM `usuarios` AS U INNER JOIN `materias` AS Ma ON Ma.Id_profesor=id  WHERE  nivel=2; ";

$result = $conn->query($sql); 
?> <div class="container form_admin">
<?php
echo "<table>
        <thead>
          <tr>
              <th>ID MATERIA</th>
              <th>ICONO MATERIA</th>
              <th>NOMBRE MATERIA</th>
              <th>ID DE PROFESOR</th>
			  <th>FOTO PROFESOR</th>
              <th>NOMBRE DEL PROFESOR ASIGNADO</th>
          </tr>
        </thead>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 
    echo    " <tbody>
          <tr>
            <td class='center'>".$row["Id_materia"]."</td>
            <td><img src='img/".$row["Imagen_materia"]."' class='responsive-img' width='60'></td>
            <td>".$row["Nombre_materia"]."</td>
            <td class='center'>".$row["Id_profesor"]."</td>
            <td><img src='Imagenes perfil/".$row["foto"]."' class='responsive-img' width='60'></td>
            <td>".$row["nombre"]. " ".$row["apellido"]."</td>
			<td> <a href='editarmateria.php?var=".$row["Id_materia"]."'><i class='material-icons'>create</i></a></td>
			<td> <a href='eliminarmateria.php?var=".$row["Id_materia"]."'><i class='material-icons'>delete</i></a></td>
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
