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
    <div class="row cajainicio">
      <div class="col l6 formulario">
	   <form  method="post" action="">
      <div class="row">
        <h2>Iniciar sesión</h2>
        <p>Digite su correo electrónico y contraseña para ingresar al Dashboard. </p>
        <p class="black-text campos">Usuario:</p>
        <div class="input-field field">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Usuario" id="first_name" type="text" class="validate black-text" name="usuario">
        </div>
        <p class="black-text campos">Contraseña:</p>
		  <div class="input-field field">
           <i class="material-icons prefix">lock</i>
          <input placeholder=" Contraseña " id="first_name" type="password" class="validate black-text" name="clave">
        </div>
		  <div class=" right">
        <a class="waves-effect waves-light btn-large shake-slow btninicio modal-trigger" href="#modal1"><input type="submit" value="¡Iniciar sesión!" name="buscar"></input></a> 
      </div>
      </div>
    </div>
    <div class="col l6 logocaja">
      <img class="responsive-img" src="img/Logo.png">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_fq7pwzey.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop autoplay></lottie-player>
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
		    echo"<script> location='InicioAdmin.php';</script>";
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
        echo   "  <div id='modal1' class='modal'>
        <div class='modal-content center'>
          <h4 class='incorrecto'>Datos incorrectos </h4>
          <a href='' class='waves-effect waves-light btn-large shake-slow btninicio'> Reintentar</a>
        </div>
      </div>";
    }
  }
?>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript">
    M.AutoInit();
		</script>
  </body>
</html>