<?php
 session_start();
 $pagina="estudiante";
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
         <div class=" col l9"">
          <div class="bienvenido row">
             <div class="texto_bienvenidia col l7">
              <h2>Bienvenido al la plaforma virtual de Sysdatec </h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, iusto accusantium? Quaerat eaque veniam expedita. Odit, saepe ea aspernatur, suscipit quia amet quaerat voluptatem laudantium corrupti expedita cum, at laborum!    </p>
             </div>
             <div class="col l4 animacion">
              <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
              <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_DMgKk1.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop     autoplay></lottie-player>
             </div>
          </div>
         </div>
         <div class="col l3 banner">
          <img class="responsive-img banner" src="img/Group 1000001079.jpg">
         </div>
        </div>
    </div>

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