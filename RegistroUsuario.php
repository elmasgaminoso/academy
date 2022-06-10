<?php
session_start();
$pagina="admin";
include ('config.php');
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
<title>Plataforma Virtual Sysdatec</title>
</head>
    <body>
      <?php
        include ('header.php');
	    ?> 
      <div class="container registro"><a href="InicioAdmin.php"><i class="material-icons">keyboard_return</i></a></div>
      <div class="container registros">
        <div class="row center">
          <h1 class="fuente1">
            <span class="text-wrapper">
              <span class="letters">Registrar a Usuario</span>
            </span>
          </h1>
        </div>
          <div class="row">
        <form class="col s12 form_registro" method="post" action="" enctype="multipart/form-data">
          <div class="row">
          <div class="col s5 caja">
           <p class="black-text campos">Usuario:</p>
            <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
              <input placeholder="Usuario" id="first_name" type="text" class="validate" name="usuario"required>
            </div>
          </div>
            <div class="col s5 caja">
              <p class="black-text campos">Nombre:</p>
              <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
              <input placeholder="Nombre"id="last_name" type="text" class="validate" name="nombre" required>
            </div>
           </div>
          </div>
          <div class="row">
           <div class="col s5 caja">
            <p class="black-text campos">Apellidos:</p>
            <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
              <input placeholder="Apellidos"id="last_name" type="text" class="validate" name="apellido" required>
            </div>
           </div>
            <div class="col s5 caja">
             <p class="black-text campos">Correo electroníco:</p>
             <div class="input-field field">
              <i class="material-icons prefix">email</i>
              <input id="email" type="email" class="validate" name="email" placeholder="Correo electroníco" required>
            </div>
           </div>
          </div>
          <div class="row">
            <div class="col s5 caja">
             <p class="black-text campos">Contraseña:</p>
               <div class="input-field field">
               <i class="material-icons prefix">vpn_key</i>
              <input placeholder="Contraseña" id="password" type="password"class="validate" name="clave" required>
            </div>
          </div>
          <div class="col s5 caja">
            <p class="black-text campos">Telefono:</p>
            <div class="input-field field">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="number" class="validate" name="telefono" placeholder="Telefono" required>
             </div>
            </div>
          </div>
          <div class="row">
           <div class="col s5 caja">
            <p class="black-text campos">Fecha de nacimiento:</p>
            <div class="input-field field">
               <i class="material-icons prefix">perm_contact_calendar</i>
                <input id="calendario" type="date"  name="fechanac" required>
              </div>
            </div>
               <div class="input-field col s1 genero">
           <label>
            <input type="checkbox" name="genero" value="M"/>
            <span>Masculino </span>
          </label>
            </div>
               <div class="input-field col s1 genero">
           
               <label>
            <input type="checkbox" name="genero" value="F" />
            <span>Femenino </span>
          </label>          
            </div>
          <div class="col s3 foto">
           <p class="black-text campos">Foto usuario:</p>
            <div class="file-field input-field">
              <div class="btn btnfoto">
                <span>Foto</span>
                  <input type="file" name="imagen" size="20" required>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Sube la foto del usuario">
              </div>
            </div>
            </div>
          </div>
            <div class="row">
             <div class="col s5 caja">
              <p class="black-text campos">Nivel:</p>
             <div class="input-field field">
               <i class="material-icons prefix">timeline</i>
              <input placeholder="Nivel" id="tel" type="text" class="validate" name="nivel" required>
              </div>
             </div>
            </div>
            <div class="row">
            <div class="col s12 niveles">     
		            <h5>Nivel para admi = 3 </h5>
                <h5>Usuarios para Profesores = 2 </h5>
                <h5>Usuarios para Estudiantes = 1 </h5> 
		         </div>
            </div>
            <div class="row registro1">
            <div class="left">
             <a class="waves-effect waves-light btn-large shake-slow btninicio modal-trigger" href="#modal1"><input type="submit" value="Registrar usuario" name="enviar"></input></a> 
            </div>
          </div>
          </div>
        </div>	
        </form>
      </div>
    </div>
    <?php
        if (isset($_POST['enviar'])){  
        $usuario=$_POST['usuario'];
        $clave=$_POST['clave'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $fechanac=$_POST['fechanac'];
        $genero=$_POST['genero'];
        $nivel=$_POST['nivel'];

        include('Subir_imagen.php');
    
        $sql = "INSERT INTO `usuarios`( `direccionf`, `foto`, `usuario`, `clave`, `correo`, `telefono`, `nombre`,`apellido`, `fecha de nacimiento`, `genero`, `nivel`) VALUES
         ( '$archivo_objetivo', '$nombre_archivo','$usuario', '$clave', '$email', '$telefono', '$nombre','$email', '$fechanac','$genero', '$nivel')";
    
        if ($conn->query($sql) === TRUE) {
            echo "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
            <div class='modal-content center'>
              <h4 class='incorrecto'>Nuevo usuario registrado</h4>
              <a href='RegistrosUsuario.php' class='waves-effect waves-light btn-large shake-slow btninicio modal-close'>Continuar</a>
            </div>
          </div>
          <div class='modal-overlay' style='z-index: 1002; display: block; opacity: 0.5;'></div>";
        } else {
            echo  "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
            <div class='modal-content center'>
              <h4 class='incorrecto'>Error al registrar usuario</h4>
              <a href='RegistrosUsuario.php' class='waves-effect waves-light btn-large shake-slow btninicio modal-close'>Reintentar</a>
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
    </body>
</html>