<?php
 session_start();
 include("Config.php");
 include("validacion_sesion.php");
if (isset ($_POST['modificar'])){
	$id=$_POST['id'];
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$nombre=$_POST['nombre'];
	$fechanac=$_POST['fechadenac'];
	$nivel=$_POST['nivel'];

$sql = "UPDATE usuarios SET usuario='$usuario',clave='$clave',correo='$correo',telefono='$telefono',nombre='$nombre',`fecha de nacimiento`='$fechanac',nivel='$nivel'  WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$sql = "SELECT * FROM usuarios WHERE id='$id'";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
}
echo "<script> location='Registrosadmi.php';</script>";	
}

if (isset ($_GET['var'])){
	$id=$_GET['var'];

$sql = "SELECT * FROM usuarios WHERE id='$id' ";
$result = $conn->query($sql); 

	if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	}
	
}
?>
<!doctype html>
<html>
<head>
    <?php
        include ('head.php');
    ?>
<title>Editar info</title>
</head>
<body >
	<div class="conatiner center">
	
	<h1>Modifica el registro</h1>
	</div>
	<div class="container center">
    <div class="row">
    <form class="col s12" method="post" action="">
      <div class="row">
		  <div class="input-field col s5 offset-s3">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Id" id="first_name" type="text" class="validate" name="id" value="<?php echo $row["id"]?>">
          <label for="first_name">Id:</label>
        </div>
        <div class="input-field col s5 offset-s3">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Usuario" id="first_name" type="text" class="validate" name="usuario" value="<?php echo $row["usuario"]?>">
          <label for="first_name">Usuario:</label>
        </div>
        <div class="input-field col s5 offset-s3">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Nombre"id="last_name" type="text" class="validate" name="nombre" value="<?php echo $row["nombre"]?>">
          <label for="last_name">Nombre:</label>
        </div>    
        <div class="input-field col s5 offset-s3">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="correo" value="<?php echo $row["correo"]?>">
          <label for="email">Correo Elcetronico</label>
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
		 <div class="input-field col s5 offset-s3">
           <i class="material-icons prefix">timeline</i>
          <input placeholder="Nivel" id="tel" type="text" class="validate" name="nivel" value="<?php echo $row["nivel"]?>">
          <label for="first_name">Nivel:</label>
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