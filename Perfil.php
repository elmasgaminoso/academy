<?php
 session_start();
 $pagina="estudiante";
 include ('config.php');
 include("validacion_sesion.php");
$sql = "SELECT * FROM usuarios WHERE id='$_SESSION[Id]' ";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	}
if (isset ($_POST['modificar'])){
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
	$clave=$_POST['clave'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$fechanac=$_POST['fechadenac'];

$sql = "UPDATE usuarios SET clave='$clave',correo='$correo',telefono='$telefono',nombre='$nombre',apellido='$apellido',`fecha de nacimiento`='$fechanac' WHERE id='$_SESSION[Id]'";

if ($conn->query($sql) === TRUE) {
    echo "Datos actualizados";
} else {
    echo "Error en actualizar los datos" . $conn->error;
}	
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
<body >
	<div class="conatiner center">
	
	<h1>Perfil</h1>
	</div>
	<div class="container center">
    <div class="row">
    <form class="col s12" method="post" action="">
      <div class="row">
		  <div class="col s5 offset-s3">
           <i class="material-icons prefix">account_circle</i>
           <p>Id: <?php echo $row["id"]?></p>
        </div>
        <div class=" col s5 offset-s3">
          <i class="material-icons prefix">account_circle</i>
           <p>Usuario: <?php echo $row["usuario"]?></p>
        </div>
        <div class="input-field col s5 offset-s3">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Nombre"id="last_name" type="text" class="validate" name="nombre" value="<?php echo $row["nombre"]?>">
          <label for="last_name">Nombre:</label>
        </div>
        <div class="input-field col s5 offset-s3">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Apellido"id="last_name" type="text" class="validate" name="apellido" value="<?php echo $row["apellido"]?>">
          <label for="last_name">Apellido:</label>
        </div>   
        <div class="input-field col s5 offset-s3">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="correo" value="<?php echo $row["correo"]?>">
          <label for="email">Correo Electronico</label>
        </div>
		   <div class="input-field col s5 offset-s3">
           <i class="material-icons prefix">vpn_key</i>
          <input placeholder="Contraseña" id="password" type="text"class="validate" name="clave" value="<?php echo $row["clave"]?>">
          <label for="first_name">Contraseña:</label>
        </div>
         <div class="input-field col s5 offset-s3">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="telefono" value="<?php echo $row["telefono"]?>">
          <label for="icon_telephone">Telefono</label>
         </div>
        <div class="input-field col s5 offset-s3">
           <i class="material-icons prefix">perm_contact_calendar</i>
            <input id="calendario" type="date" name="fechadenac" value="<?php echo $row["fecha de nacimiento"]?>">
            <label >Fecha de nacimiento</label>
        </div>      
		  </div>
		  <div class="row center">
        <a class="waves-effect waves-light btn-large shake-slow"><i class="material-icons left  ">send</i><input type="submit" value="modificar" name="modificar"></input></a> 
		 
      </div>
		
		</div>	
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