<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <?php
      include ('head.php');
    ?>

    <title>Iniciar sección Academy</title>
  </head>
  <body class="fondo_inicio">
  <div class="container center white z-depth-3 sesion_contenedor">
    <div class="row">
      <div class="col l6">
	   <form  method="post" action="">
      <div class="row">
        <h2>Iniciar sesión</h2>
        <p>Digite su correo electrónico y contraseña para ingresar al Dashboard. </p>
        <div class="input-field">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Usuario" id="first_name" type="text" class="validate black-text" name="usuario">
          <label for="first_name" class="black-text">Usuario:</label>
        </div>
		  <div class="input-field ">
           <i class="material-icons prefix">vpn_key</i>
          <input placeholder=" Contraseña " id="first_name" type="password" class="validate black-text" name="clave">
          <label for="first_name" class="black-text">Contraseña:</label>
        </div>
		  <div class=" center">
        <a class="waves-effect waves-light btn-large shake-slow grey"><i class="material-icons left  ">send</i><input type="submit" value="¡Iniciar sesión!" name="buscar"></input></a> 
      </div>
      </div>
    </div>
  </div>
</div>
 <?php  
if (isset ($_POST['buscar'])){
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];

	include('Config.php');
	  $sql="SELECT * FROM `usuarios` WHERE  usuario='$usuario' and clave='$clave' " ;
	  $result = $conn->query($sql); 
	  if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
    $id= $row['id'];
		  if ($row["nivel"]==3){
        $_SESSION['usuario']="3"; 
        $_SESSION['Id']=$id;
		    echo"<script> location='RegistroUsuario.php';</script>";
	      }else
          if ($row["nivel"]==2){
            $_SESSION['usuario']="2";
            $_SESSION['Id']=$id;
		        echo"<script> location='InicioProfesor.php';</script>";
          }else
            if ($row["nivel"]==1){
              $_SESSION['usuario']="1";
              $_SESSION['Id']=$id;
               echo"<script> location='InicioEstudiante.php';</script>";
	          }
      }else{
        echo  "<div class='container center'>
        <h4>Datos incorrectos </h4><br><br>";
        echo "<a href='' class='waves-effect waves-light btn-large shake-slow grey'> REINTENTAR  </a>
        </div>";
    }
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