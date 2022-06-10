<?php
session_start();
 $pagina="estudiante";
 $inicio=false;
 $notas=false;
 $actividades=true;
 $perfil=false;
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
          include('menu_lateral.php');
        ?>  
    <div class="container">
        <div class="row caja_bienvenido">	
         <div class=" col l6 caja_actividad">
          <div class="bienvenido row">
             <div class="texto_bienvenidia col">
              <h2>Actividades</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, iusto accusantium? Quaerat eaque veniam expedita. Odit, saepe ea aspernatur, suscipit quia amet quaerat voluptatem laudantium corrupti expedita cum, at laborum!    </p>
             </div>

          </div>
         </div>
         <div class="col l6 animacion actividades">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_j2rjqphu.json"  background="transparent"  speed="1"  style="width: 800px; height: 300px;"  loop autoplay></lottie-player>
        </div>
        </div>
        <div class="row vistarapida">
            <div class="row cajas">
            <?php 
                  $sql= "SELECT Ma.*, Ma_a.Id_Estudiante=Id_Estudiante, U.id FROM `materias_asignadas` AS Ma_a INNER JOIN `materias` AS Ma ON Ma.Id_materia=Ma_a.Id_materia INNER JOIN `usuarios` AS U ON U.id=Id_Estudiante WHERE  Id_Estudiante='$_SESSION[Id]'";
                  $result = $conn->query($sql);

                while($row = $result->fetch_assoc()){
                    echo "<div class='col l6 caja_vista caja_actividad1'>
                    <a href='".$row["Direccion_actividadesE"]."?var=".$row["Id_materia"]."'>
                    <img src='Img/" .$row['Imagen_materia']."' class='responsive-img imgmateria' width='auto'>
                    <p>".$row["Nombre_materia"]."</p>
                    </a>
                </div>" ; 
                }
             ?>
          </div>
    </div>

        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
             var elems = document.querySelectorAll('.collapsible');
             var instances = M.Collapsible.init(elems);
             });
            </script>
    </body>
</html>