<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="css/1.css">
		<!--<link rel="shortcut icon" type="image/png" href="img/apple-icon-180x180.png"/>-->

    <title>Iniciar sección Academy</title>
  </head>
  <body>
  <div class="container center">
    <div class="row">
	   <form class="col s12" method="post" action="">
      <div class="row">
		 <br>
		  <br>
		  
        <div class="input-field col s5 offset-s3">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Codigo" id="first_name" type="text" class="validate black-text" name="usuario">
          <label for="first_name" class="black-text">Usuario:</label>
        </div>
		  <div class="input-field col s5 offset-s3">
           <i class="material-icons prefix">vpn_key</i>
          <input placeholder=" Contraseña " id="first_name" type="password" class="validate black-text" name="clave">
          <label for="first_name" class="black-text">Contraseña:</label>
        </div>
</div>
		  <div class="row center">
        <a class="waves-effect waves-light btn-large shake-slow grey"><i class="material-icons left  ">send</i><input type="submit" value="Enviar" name="buscar"></input></a> 
		 
      </div>
</div>

    <?php  
    if (isset ($_POST['buscar'])){
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];

	include('config.php');
	  $sql="SELECT * FROM `usuarios` WHERE  usuario='$usuario' and clave='$clave' " ;
	  $result = $conn->query($sql); 

	  if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		if ($row["nivel"]==3){
		echo"<script> location='RegistroUsuario.php';</script>";
	}else{
    if ($row["nivel"]==2){
		echo"<script> location='InicioProfesor.php';</script>";
		}
  }else{
    if ($row["nivel"]==1){
    echo"<script> location='InicioEstudiante.php';</script>";
    }
	}  else {
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