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
              <span class="letters">Registrar materia</span>
            </span>
          </h1>
        </div>
          <div class="row">
        <form class="col s12 form_registro" method="post" action="" enctype="multipart/form-data">
          <div class="row">
          <div class="col s5 caja">
           <p class="black-text campos">Nombre de materia:</p>
            <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
              <input placeholder="Escriba el nombre de la materia" id="first_name" type="text" class="validate" name="nombre" required>
            </div>
          </div>
            <div class="col s5 caja">
            <p class="black-text campos">Icono de la materia:</p>
            <div class="file-field input-field">
              <div class="btn btnfoto">
                <span>Foto</span>
                  <input type="file" name="imagen" size="20" required>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Sube la foto de la materia">
              </div>
            </div>
           </div>
          </div>
          <div class="row">
          <div class="col s5 caja">
           <p class="black-text campos">Dirección actividades:</p>
            <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
              <input placeholder="Escriba la dirección de Actividades" id="first_name" type="text" class="validate" name="actividades" required>
            </div>
          </div>
            <div class="col s5 caja">
            <p class="black-text campos">Dirección notas:</p>
            <div class="input-field field">
               <i class="material-icons prefix">account_circle</i>
              <input placeholder="Escriba la deirección de Notas" id="first_name" type="text" class="validate" name="notas" required>
            </div>
           </div>
          </div>
          <div class="row">
           <div class="col s6 caja">
            <p class="black-text campos">Profesor de la materia</p>
            <div class="input-field col s12">
               <select class="icons" name="profesor" required>
               <option value='' disabled selected >Escoja al profesor</option>
               <?php   
                 while($row = $result->fetch_assoc()) {
                 echo "
                   <option value='".$row['id']."' data-icon='Imagenes perfil/".$row['foto']."'>".$row['nombre'] .' '. $row['apellido']."</option>";
                }   
                ?>
                </select>
             </div>
           </div>   
          </div>
            <div class="row registro1">
            <div class="left">
             <a class="waves-effect waves-light btn-large shake-slow btninicio"><input type="submit" value="Registrar materia" name="enviar"></input></a> 
            </div>
          </div>
          </div>
        </div>	
        </form>
      </div>
    </div>
    <?php
        if (isset($_POST['enviar'])){  
        $Nombre_materia=$_POST['nombre'];
        $Id_profesor=$_POST['profesor'];
        $Notas=$_POST['notas'];
        $Actividades=$_POST['actividades'];

        include('Subir_imagen.php');
    
        $sql = "INSERT INTO `materias`( `Nombre_materia`, `Imagen_materia`, `Id_profesor`, `Direccion_notas`, `Direccion_actividades`) VALUES
         ( '$Nombre_materia', '$nombre_archivo','$Id_profesor','$Notas', '$Actividades')";
    
        if ($conn->query($sql) === TRUE) {
            echo  "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
            <div class='modal-content center'>
              <h4 class='incorrecto'>Nuevo Materia Registrada</h4>
              <a href='' class='waves-effect waves-light btn-large shake-slow btninicio modal-close'>Continuar</a>
            </div>
          </div>
          <div class='modal-overlay' style='z-index: 1002; display: block; opacity: 0.5;'></div>";
        } else {
            echo  "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
            <div class='modal-content center'>
              <h4 class='incorrecto'>Error al registrar la materia</h4>
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
    </body>
</html>
