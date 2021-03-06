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
        if (isset ($_GET['var'])){
          $id=$_GET['var'];
        
        $sql = "SELECT * FROM materias WHERE Id_materia='$id' ";
        $result = $conn->query($sql); 
        
          if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          }
          
        } 
	    ?> 
      <div class="container registro"><a href="materias.php"><i class="material-icons">keyboard_return</i></a></div>
      <div class="container registros">
        <div class="row center">
          <h1 class="fuente1">
            <span class="text-wrapper">
              <span class="letters">Actualizar materia</span>
            </span>
          </h1>
        </div>
          <div class="row">
        <form class="col s12 form_registro" method="post" action="" enctype="multipart/form-data">
          <div class="row">
          <div class="col s5 caja">
           <p class="black-text campos">Nombre de materia:</p>
            <div class="input-field field">
               <i class="material-icons prefix">import_contacts</i>
              <input placeholder="Escriba el nombre de la materia" id="first_name" type="text" class="validate" value="<?php echo $row['Nombre_materia']?>" name="nombre" required>
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
           <p class="black-text campos">Direcci??n actividades Estudiantes:</p>
            <div class="input-field field">
               <i class="material-icons prefix">insert_link</i>
              <input placeholder="Escriba la direcci??n de Actividades" id="first_name" type="text" class="validate" name="actividades2" value="<?php echo $row['Direccion_actividadesE']?>" required>
            </div>
          </div>
            <div class="col s5 caja">
            <p class="black-text campos">Direcci??n notas Estudiantes:</p>
            <div class="input-field field">
               <i class="material-icons prefix">insert_link</i>
              <input placeholder="Escriba la deirecci??n de Notas" id="first_name" type="text" class="validate" name="notas2" value="<?php echo $row['Direccion_notasE']?>" required>
            </div>
           </div>
          </div>
          <div class="row">
          <div class="col s5 caja">
           <p class="black-text campos">Direcci??n actividades Profesores:</p>
            <div class="input-field field">
               <i class="material-icons prefix">insert_link</i>
              <input placeholder="Escriba la direcci??n de Actividades" id="first_name" type="text" class="validate" name="actividades"value=" <?php echo $row['Direccion_actividades']?>" required>
            </div>
          </div>
            <div class="col s5 caja">
            <p class="black-text campos">Direcci??n notas Profesores:</p>
            <div class="input-field field">
               <i class="material-icons prefix">insert_link</i>
              <input placeholder="Escriba la deirecci??n de Notas" id="first_name" type="text" class="validate" name="notas" value="<?php echo $row['Direccion_notas']?>" required>
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
               $sql= "SELECT `id`,`foto`,`nombre`,`apellido` FROM `usuarios` WHERE `nivel`= 2";
               $result = $conn->query($sql);
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
             <a class="waves-effect waves-light btn-large shake-slow btninicio"><input type="submit" value="Actualizar los datos" name="enviar"></input></a> 
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
        $Notas2=$_POST['notas2'];
        $Actividades2=$_POST['actividades2'];

        include('Subir_imagenes.php');
       
        $sql =  "UPDATE materias SET Nombre_materia='$Nombre_materia' ,Imagen_materia='$nombre_archivo',Id_profesor='$Id_profesor',Direccion_notas='$Notas',Direccion_actividades='$Actividades',Direccion_notasE='$Notas2',Direccion_actividadesE='$Actividades2'  WHERE Id_materia='$id'";   
    
        if ($conn->query($sql) === TRUE) {
            echo  "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
            <div class='modal-content center'>
              <h4 class='incorrecto'>Datos Actualizados</h4>
              <a href='' class='waves-effect waves-light btn-large shake-slow btninicio modal-close'>Continuar</a>
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
    </body>
</html>
