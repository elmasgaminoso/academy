<?php
session_start();
$pagina="profesor";
include("Config.php");
include("validacion_sesion.php");
$sql = "SELECT * FROM `usuarios` WHERE  id='$_SESSION[Id]' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
 ?>
<!DOCTYPE html>
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
        include('menu_lateral.php')
        ?>  
    <div class="container">
        <div class="row center">	
          <h1 class="fuente1 center">Bienvenido a la sesión de Profesor.</h1>
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