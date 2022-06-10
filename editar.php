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
<title>Editar info</title>
</head>
<body >
  <?php
        include ('header.php');
        if (isset ($_GET['var'])){
          $id=$_GET['var'];
        
        $sql = "SELECT * FROM usuarios WHERE id='$id' ";
        $result = $conn->query($sql); 
        
          if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          }
          
        } 
	    ?>
  <div class="container registro"><a href="RegistrosUsuario.php"><i class="material-icons">keyboard_return</i></a></div>
  <div class="container registros">
        <div class="row center">
          <h1 class="fuente1">
            <span class="text-wrapper">
              <span class="letters">Modificar registro</span>
            </span>
          </h1>
        </div>
    <div class="row">
    <form class="col s12 form_registro" method="post" action="" enctype="multipart/form-data">
        <div class="row">
          <div class="col s5 foto">
          <img src="Imagenes perfil/<?php echo $row["foto"]?>" class="responsive-img" width="100">
            <p class="black-text campos">Foto usuario:</p>
            <div class="file-field input-field">
            <div class="btn btnfoto">
              <span>Foto</span>
              <input type="file" name="imagen" size="20">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Sube la foto del usuario">
            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s5 caja">
           <p class="black-text campos">Id:</p>
            <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
               <input placeholder="Id" id="first_name" type="text" class="validate" name="id" value="<?php echo $row["id"]?>">
            </div>
          </div>
          <div class="col s5 caja">
           <p class="black-text campos">Usuario:</p>
            <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
               <input placeholder="Usuario" id="first_name" type="text" class="validate" name="usuario" value="<?php echo $row["usuario"]?>">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col s5 caja">
              <p class="black-text campos">Nombre:</p>
              <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
               <input placeholder="Nombre"id="last_name" type="text" class="validate" name="nombre" value="<?php echo $row["nombre"]?>">
            </div>
           </div>
           <div class="col s5 caja">
            <p class="black-text campos">Apellidos:</p>
            <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
               <input placeholder="Apellido"id="last_name" type="text" class="validate" name="apellido" value="<?php echo $row["apellido"]?>">
            </div>
           </div>
        </div>
        <div class="row">
            <div class="col s5 caja">
             <p class="black-text campos">Correo electroníco:</p>
             <div class="input-field field">
              <i class="material-icons prefix">email</i>
              <input id="email" type="email" class="validate" name="correo" value="<?php echo $row["correo"]?>">
            </div>
           </div>
            <div class="col s5 caja">
             <p class="black-text campos">Contraseña:</p>
               <div class="input-field field">
               <i class="material-icons prefix">vpn_key</i>
               <input placeholder="Contraseña" id="password" type="text"class="validate" name="clave" value="<?php echo $row["clave"]?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s5 caja">
            <p class="black-text campos">Telefono:</p>
            <div class="input-field field">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="tel" class="validate" name="telefono" value="<?php echo $row["telefono"]?>">
             </div>
            </div>
           <div class="col s5 caja">
            <p class="black-text campos">Fecha de nacimiento:</p>
            <div class="input-field field">
               <i class="material-icons prefix">perm_contact_calendar</i>
               <input id="calendario" type="date" name="fechadenac" value="<?php echo $row["fecha de nacimiento"]?>">
              </div>
            </div>
          </div>
            <div class="row">
             <div class="col s5 caja">
              <p class="black-text campos">Nivel:</p>
             <div class="input-field field">
               <i class="material-icons prefix">timeline</i>
               <input placeholder="Nivel" id="tel" type="text" class="validate" name="nivel" value="<?php echo $row["nivel"]?>">
              </div>
             </div>
            </div>
            <div class="row registro1">
            <div class="left">
             <a class="waves-effect waves-light btn-large shake-slow btninicio modal-trigger" href="#modal1"><input type="submit" value="Modificar datos" name="modificar"></input></a> 
            </div>
          </div>
          </form>
          </div>
        </div>
	</div>
</body>
<?php 
if (isset ($_POST['modificar'])){
  $id=$_POST['id'];
  $usuario=$_POST['usuario'];
  $clave=$_POST['clave'];
  $correo=$_POST['correo'];
  $telefono=$_POST['telefono'];
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $fechanac=$_POST['fechadenac'];
  $nivel=$_POST['nivel'];

  include('Subir_imagen.php');
  
$sql = "UPDATE usuarios SET foto='$nombre_archivo' ,usuario='$usuario',clave='$clave',correo='$correo',telefono='$telefono',nombre='$nombre',apellido='$apellido',`fecha de nacimiento`='$fechanac',nivel='$nivel'  WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
  echo "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
  <div class='modal-content center'>
    <h4 class='incorrecto'>Datos Actualizados</h4>
    <a href='RegistrosUsuario.php' class='waves-effect waves-light btn-large shake-slow btninicio modal-close'>Continuar</a>
  </div>
</div>
<div class='modal-overlay' style='z-index: 1002; display: block; opacity: 0.5;'></div>";
} else {
  echo  "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
  <div class='modal-content center'>
    <h4 class='incorrecto'>Error al actualizar los datos</h4>
    <a href='' class='waves-effect waves-light btn-large shake-slow btninicio modal-close'>Reintentar</a>
  </div>
</div>
<div class='modal-overlay' style='z-index: 1002; display: block; opacity: 0.5;'></div>";
}
$conn->close();

}
?>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript">
	 M.AutoInit();
		
		</script>
</html>