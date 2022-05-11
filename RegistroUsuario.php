<?php
    session_start();
    $pagina="admin";
    include ('config.php');
    include("validacion_sesion.php");
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
      <div class="container">
        <div class="row center">	
          <h4 class="fuente1 center">Bienvenido a la sesión de administrador, en esta página podrá administrar la base de datos, creando, editando y eliminando registros..</h4>
          <h1>
            <span class="text-wrapper">
              <span class="letters">Registrar a Usuario</span>
            </span>
          </h1>
        </div>
          <div class="row">
        <form class="col s12" method="post" action="">
          <div class="row">
            <div class="input-field col s6">
               <i class="material-icons prefix">account_circle</i>
              <input placeholder="Usuario" id="first_name" type="text" class="validate" name="usuario">
              <label for="first_name">Usuario:</label>
            </div>
            <div class="input-field col s6">
               <i class="material-icons prefix">account_circle</i>
              <input placeholder="Nombre"id="last_name" type="text" class="validate" name="nombre">
              <label for="last_name">Nombre:</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input id="email" type="email" class="validate" name="email">
              <label for="email">Correo Elcetronico</label>
            </div>
               <div class="input-field col s6">
               <i class="material-icons prefix">vpn_key</i>
              <input placeholder="Contraseña" id="password" type="password"class="validate" name="clave">
              <label for="first_name">Contraseña:</label>
            </div>
          </div>
          <div class="row">
             <div class="input-field col s4">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="number" class="validate" name="telefono">
              <label for="icon_telephone">Telefono</label>
             </div>
            <div class="input-field col s4">
               <i class="material-icons prefix">perm_contact_calendar</i>
                <input id="calendario" type="date"  name="fechanac">
                <label >Fecha de nacimiento</label>
            </div>
               <div class="input-field col s2">
           <label>
            <input type="checkbox" name="genero" value="M"/>
            <span>Masculino </span>
          </label>
            </div>
               <div class="input-field col s2">
           
               <label>
            <input type="checkbox" name="genero" value="F" />
            <span>Femenino </span>
          </label>           
            </div>
              </div>
             <div class="input-field col s6">
               <i class="material-icons prefix">timeline</i>
              <input placeholder="Nivel" id="tel" type="text" class="validate" name="nivel">
              <label for="first_name">Nivel:</label>
            </div>
            <div class="row col s6">
            <div class="col ">
		        <h5>Nivel para admi = 3 </h5>
		    </div>
		    <div class="col ">
			    <h5>Usuarios para Profesores = 2 </h5> 
		    </div>
            <div class="col ">
			    <h5>Usuarios para Estudiantes = 1 </h5> 
		    </div>
            </div>
            <div class="row left">
             <a class="waves-effect waves-light btn-large shake-slow"><i class="material-icons left  ">send</i><input type="submit" value="enviar" name="enviar"></input></a> 
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
        $fechanac=$_POST['fechanac'];
        $genero=$_POST['genero'];
        $nivel=$_POST['nivel'];

    
        $sql = "INSERT INTO `usuarios`( `usuario`, `clave`, `correo`, `telefono`, `nombre`, `fecha de nacimiento`, `genero`, `nivel`) VALUES
         ('$usuario', '$clave', '$email', '$telefono', '$nombre', '$fechanac','$genero', '$nivel')";
    
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