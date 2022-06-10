<?php
session_start();
$pagina="profesor";
include ('config.php');
include("validacion_sesion.php");
$sql = "SELECT * FROM `usuarios` WHERE  id='$_SESSION[Id]' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
}
$Id_materia= $_SESSION['Id_materia'];
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
            
          }
          $sql = "SELECT * FROM clases WHERE id='$id' ";
          $result = $conn->query($sql); 
          
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            }
	    ?> 
      <div class="container registro"><a href="materiasasignadasprofesor.php"><i class="material-icons">keyboard_return</i></a></div>
      <div class="container registros">
        <div class="row center">
          <h1 class="fuente1">
            <span class="text-wrapper">
              <span class="letters">Actualizar clase</span>
            </span>
          </h1>
        </div>
          <div class="row">
        <form class="col s12 form_registro" method="post" action="" enctype="multipart/form-data">
          <div class="row">
          <div class="col s12 caja clase">
           <p class="black-text campos">Nombre de la clase:</p>
            <div class="input-field field">
               <i class="material-icons prefix">book</i>
              <input placeholder="Escriba el nombre de la clase" id="first_name" type="text" class="validate" value="<?php echo $row['Nombre_clase'] ?>" name="titulo" required>
            </div>
          </div>
          </div>
          <div class="row">
           <div class="col s12 caja clase">
            <p class="black-text campos">Contenido de la clase:</p>
            <div class="input-field field contenidoclase">
               <i class="material-icons prefix">import_contacts</i>
               <textarea id="textarea1" class="materialize-textarea" placeholder="Escriba el contenido de la clase" name="contenido"><?php echo $row['Info_clase'] ?></textarea>
            </div>
           </div>
          </div>
         <div class="row">
          <div class="col s6 foto">
           <p class="black-text campos">Documento para la clase:</p>
            <div class="file-field input-field">
              <div class="btn btnfoto">
                <span>Documento de apoyo</span> 
                  <input type="file" name="archivos" size="20" required>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Sube el material para la clase">
              </div>
            </div>
            </div>
          </div>
            <div class="row registro1">
            <div class="left">
             <a class="waves-effect waves-light btn-large shake-slow btninicio"><input type="submit" value="Actualizar clase" name="enviar"></input></a> 
            </div>
          </div>
          </div>
        </div>	
        </form>
      </div>
    </div>
    <?php
        if (isset($_POST['enviar'])){  
        $titulo=$_POST['titulo'];
        $contenido=$_POST['contenido'];

        include('subir_archivo.php');
    
        $sql =  "UPDATE clases SET Nombre_clase='$titulo' ,Info_clase='$contenido', Archivo_clase='$name_file'";   
    
        if ($conn->query($sql) === TRUE) {
            echo  "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
            <div class='modal-content center'>
              <h4 class='incorrecto'>Clase actualizada</h4>
              <a href='' class='waves-effect waves-light btn-large shake-slow btninicio modal-close'>Continuar</a>
            </div>
          </div>
          <div class='modal-overlay' style='z-index: 1002; display: block; opacity: 0.5;'></div>";
        } else {
            echo  "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
            <div class='modal-content center'>
              <h4 class='incorrecto'>Error al actualizar la clase</h4>
              <a href='' class='waves-effect waves-light btn-large shake-slow btninicio modal-close'>Continuar</a>
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