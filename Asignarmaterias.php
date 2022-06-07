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
$sql= "SELECT `id`,`foto`,`nombre`,`apellido` FROM `usuarios` WHERE `nivel`= 2";
$result = $conn->query($sql);
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
              <span class="letters">Asignar materia</span>
            </span>
          </h1>
        </div>  
          <div class="row">
        <form class="col s12 form_registro" method="post" action="" enctype="multipart/form-data">
          <div class="row">
          <div class="col s6 caja">
           <p class="black-text campos">Asignar estudiante:</p>
           <div class="input-field col s12">
               <select class="icons" name="estudiante">
               <option value='' disabled selected >Escoja al estudiante</option>
               <?php if ($result->num_rows > 0) {   
                 while($row = $result->fetch_assoc()) {
                 echo "
                   <option value='".$row['id']."' data-icon='Imagenes perfil/".$row['foto']."'>".$row['nombre'] .' '. $row['apellido']."</option>";
                }
            }   
                ?>
                </select>
             </div>
          </div>
          <div class="col s6 caja">
            <p class="black-text campos">Materia</p>
            <div class="input-field col s12">
               <select class="icons" name="profesor">
               <option value='' disabled selected >Escoja la materia</option>
               <?php if ($result->num_rows > 0) {   
                 while($row = $result->fetch_assoc()) {
                 echo "
                   <option value='".$row['id']."' data-icon='Imagenes perfil/".$row['foto']."'>".$row['nombre'] .' '. $row['apellido']."</option>";
                }
            }   
                ?>
                </select>
             </div>
           </div>   
          </div>
            <div class="row registro1">
            <div class="left">
             <a class="waves-effect waves-light btn-large shake-slow btninicio"><input type="submit" value="Asignar materia" name="enviar"></input></a> 
            </div>
          </div>
          </div>
        </div>	
        </form>
      </div>
    </div>
    <?php
        if (isset($_POST['enviar'])){  
        $Id_materia=$_POST['materia'];
        $Id_estudiante=$_POST['estudiante'];

        include('Subir_imagen.php');
    
        $sql = "INSERT INTO `materias`( `Id_estudiante`, `Id_materia`) VALUES
         ( '$Id_materia', '$Id_estudiante')";
    
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
     M.AutoInit();
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
