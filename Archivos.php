<?php
 session_start();
 $pagina="estudiante";
 include("validacion_sesion.php");
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
    <div class="container">
        <div class="row center">	
          <h1 class="fuente1 center">Subir archivo</h1>
          <form action="subir_archivo.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="archivos">Archivo:</label>
                </td>
                <td><input type="file" name="archivos" size="20"></td>
            </tr>
            <tr> <td colspan="2"><input type="submit" value="insertar archivo"></td></tr>
        </table>
    </form>

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