<?php
 session_start();
 $pagina="estudiante";
 $inicio=false;
 $notas=false;
 $actividades=false;
 $perfil=true;
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
    header("Location: perfil.php");

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
  <?php
      include ('header.php');
      include('menu_lateral.php');
  ?>  
	<div class="container">
    <div class="row">
    <h2 class="cuenta_titulo">Mi cuenta</h2>
    <form class="col s12" method="post" action="">
      <div class="row">
		  <div class="col s5 contenedor_perfil">
        <div class="col l4">

        </div>
        <div class="col l7 right nombre">
          <h2 class="nombre_perfil"> <?php echo $nombre_usuario ?></h2>
        </div>
        </div>
        </div>
      <div class="form_perfil">
      <div class="col s6 campo_perfil">
        <p class="black-text campos">Nombres:</p>
        <div class="input-field field">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Nombre"id="last_name" type="text" class="validate" name="nombre" value="<?php echo $row["nombre"]?>">
        </div>
      </div>
      <div class="col s6 campo_perfil">
        <p class="black-text campos">Apellidos:</p>
        <div class="input-field field">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Apellido"id="last_name" type="text" class="validate" name="apellido" value="<?php echo $row["apellido"]?>">
        </div>
        </div>
        <div class="col s6 campo_perfil">
        <p class="black-text campos">Apellidos:</p>
        <div class="input-field field">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="correo" value="<?php echo $row["correo"]?>">
        </div>
        </div>
      <div class="col s6 campo_perfil">
      <p class="black-text campos">Cambiar contraseña:</p>
		   <div class="input-field field">
           <i class="material-icons prefix">vpn_key</i>
          <input placeholder="Contraseña" id="password" type="text"class="validate" name="clave" value="<?php echo $row["clave"]?>">
        </div>
        </div>
        <div class="col s6 campo_perfil">
        <p class="black-text campos">Telefono:</p>
         <div class="input-field field">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="telefono" value="<?php echo $row["telefono"]?>">
          </div>
         </div>
        <div class="col s6 campo_perfil">
        <p class="black-text campos">Fecha de nacimiento:</p>
        <div class="input-field field">
           <i class="material-icons prefix">perm_contact_calendar</i>
            <input id="calendario" type="date" name="fechadenac" value="<?php echo $row["fecha de nacimiento"]?>">
          </div>
        </div>
        <div class="col s12">
          <a class="waves-effect waves-light btn-large shake-slow  btninicio"><input type="submit" value="Actualizar los datos" name="modificar"></input></a> 
        </div>      
		    </div>
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