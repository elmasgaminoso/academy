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
<title>Registro Usuarios por admin</title>
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
        <form class="col s12 form_registro" method="post" action="">
          <div class="row">
          <div class="col s5 caja">
           <p class="black-text campos">Usuario:</p>
            <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
              <input placeholder="Usuario" id="first_name" type="text" class="validate" name="usuario">
            </div>
          </div>
            <div class="col s5 caja">
              <p class="black-text campos">Nombre:</p>
              <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
              <input placeholder="Nombre"id="last_name" type="text" class="validate" name="nombre">
            </div>
           </div>
          </div>
          <div class="row">
           <div class="col s5 caja">
            <p class="black-text campos">Apellidos:</p>
            <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
              <input placeholder="Apellidos"id="last_name" type="text" class="validate" name="apellido">
            </div>
           </div>
            <div class="col s5 caja">
             <p class="black-text campos">Correo electroníco:</p>
             <div class="input-field field">
              <i class="material-icons prefix">email</i>
              <input id="email" type="email" class="validate" name="email" placeholder="Correo electroníco">
            </div>
           </div>
          </div>
          <div class="row">
            <div class="col s5 caja">
             <p class="black-text campos">Contraseña:</p>
               <div class="input-field field">
               <i class="material-icons prefix">vpn_key</i>
              <input placeholder="Contraseña" id="password" type="password"class="validate" name="clave">
            </div>
          </div>
          <div class="col s5 caja">
            <p class="black-text campos">Telefono:</p>
            <div class="input-field field">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="number" class="validate" name="telefono" placeholder="Telefono">
             </div>
            </div>
          </div>
          <div class="row">
           <div class="col s5 caja">
            <p class="black-text campos">Fecha de nacimiento:</p>
            <div class="input-field field">
               <i class="material-icons prefix">perm_contact_calendar</i>
                <input id="calendario" type="date"  name="fechanac">
              </div>
            </div>
               <div class="input-field col s2 genero">
           <label>
            <input type="checkbox" name="genero" value="M"/>
            <span>Masculino </span>
          </label>
            </div>
               <div class="input-field col s2 genero">
           
               <label>
            <input type="checkbox" name="genero" value="F" />
            <span>Femenino </span>
          </label>           
            </div>
              </div>
            <div class="row">
             <div class="col s5 caja">
              <p class="black-text campos">Nivel:</p>
             <div class="input-field field">
               <i class="material-icons prefix">timeline</i>
              <input placeholder="Nivel" id="tel" type="text" class="validate" name="nivel">
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
             <a class="waves-effect waves-light btn-large shake-slow btninicio"><input type="submit" value="Registrar usuario" name="enviar"></input></a> 
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

    
        $sql = "INSERT INTO `usuarios`( `usuario`, `clave`, `correo`, `telefono`, `nombre`,`apellido`, `fecha de nacimiento`, `genero`, `nivel`) VALUES
         ('$usuario', '$clave', '$email', '$telefono', '$nombre','$email', '$fechanac','$genero', '$nivel')";
    
        if ($conn->query($sql) === TRUE) {
            echo  "<div class='container center'>
     <h4>Nuevo Usuario registrado </h4>
    </div>";
        } else {
            echo  "<div class='container center'>
     <h4>Error al registrar usuario</h4>
    </div>";
        }
    
        $conn->close();

    }
    ?>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
    $('.datepicker').datepicker();
  });
      	$(document).ready(function(){
    $('.parallax').parallax();
  });
  $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
      
	 $('.dropdown-trigger').dropdown();	
		</script>
    </body>
</html>