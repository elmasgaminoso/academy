<?php
	include("Config.php")

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/1.css">
<title>Documento sin título</title>
</head>

<body>	
<div class="conatiner center">
	<h1>Tabla Datos Usuarios</h1>
</div>
<?php

$sql = "SELECT * FROM `usuarios` ";
$result = $conn->query($sql); 
?> <div class="container">
<?php
echo "<table>
        <thead>
          <tr>
               <th>ID</th>
              <th>USUARIO</th>
              <th>CLAVE</th>
			  <th>CORREO</th>
			  <th>TELEFONO</th>
			  <th>NOMBRE</th>
			  <th>FECHA DE NACIMIENTO</th>
			  <th>GENERO</th>
			  <th>NIVEL</th>
          </tr>
        </thead>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 
    echo    " <tbody>
          <tr>
             <td>".$row["id"]."</td>
            <td>".$row["usuario"]."</td>
            <td>".$row["clave"]."</td>
			<td>".$row["correo"]."</td>
			<td>".$row["telefono"]."</td>
            <td>".$row["nombre"]."</td>
			<td>".$row["fecha de nacimiento"]."</td>
			<td>".$row["genero"]."</td>
			<td>".$row["nivel"]."</td>
			<td> <a href='perfil.php?var=".$row["id"]."'><i class='material-icons'>create</i></a></td>
			<td> <a href='eliminar.php?var=".$row["id"]."'><i class='material-icons'>delete</i></a></td>
        </tbody>";
      

	}

}
echo "</table>"; 

	?> </div>

<div class="conatiner center">
	<h3> Los usuarios con nivel 3 tienen privilegio de administrador.</h3>
	
	</div>
</body>          
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript">
	
$(".dropdown-trigger").dropdown();
	$(document).ready(function(){
    $('.datepicker').datepicker();
  });
      	
		
		</script>
</html>
