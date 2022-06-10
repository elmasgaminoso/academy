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
$sql= "SELECT `id`,`foto`,`nombre`,`apellido` FROM `usuarios` WHERE `nivel`= 1";
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
               <select class="icons" name="estudiante" required>
               <option value='' disabled selected >Escoja al estudiante</option>
               <?php    
                 while($row = $result->fetch_assoc()) {
                 echo "
                   <option value='".$row['id']."' data-icon='Imagenes perfil/".$row['foto']."'>".$row['nombre'] .' '. $row['apellido']."</option>";
                }
              
                ?>
                </select>
             </div>
          </div>
          <div class="col s6 caja">
            <p class="black-text campos">Materia</p>
            <div class="input-field col s12">
               <select class="icons" name="materia" required>
               <option value='' disabled selected >Escoja la materia</option>
               <?php
               $sql = "SELECT * FROM `materias` ";
               $result = $conn->query($sql);
                 while($row = $result->fetch_assoc()) {
                 echo "
                   <option value='".$row['Id_materia']."' data-icon='Imagenes perfil/".$row['Imagen_materia']."'>".$row['Nombre_materia'] ."</option>";
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

    
        $sql = "INSERT INTO `materias_asignadas`( `Id_Estudiante`, `Id_materia`) VALUES
         ( '$Id_estudiante', '$Id_materia')";
    
        if ($conn->query($sql) === TRUE) {
            echo  "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
            <div class='modal-content center'>
              <h4 class='incorrecto'>Materia Asignada</h4>
              <a href='' class='waves-effect waves-light btn-large shake-slow btninicio modal-close'>Continuar</a>
            </div>
          </div>
          <div class='modal-overlay' style='z-index: 1002; display: block; opacity: 0.5;'></div>";
        } else {
            echo  "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
            <div class='modal-content center'>
              <h4 class='incorrecto'>Error al asignar materia</h4>
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
