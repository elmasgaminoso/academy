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
 if (isset ($_GET['var'])){
    $id_materia=$_GET['var'];
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
    <body class="logica profe">
    <?php
          include ('header.php');
        ?>
 <div class="container registro">
    <a href="materiasasignadasprofesor.php"><i class="material-icons">keyboard_return</i></a>
  </div>
    <div class="container materia_contenedor">
        <div class="row caja_bienvenido">	
         <div class=" col l6 caja_actividad">
          <div class=" row">
             <div class="texto_bienvenidia materia_caja col">
              <div class="materia_titulo">
               <svg xmlns="http://www.w3.org/2000/svg" width="52" height="49" viewBox="0 0 52 49" fill="none"><path d="M32 36H20C20.2797 36 20.5053 38.6878 20.5053 41.9989C20.5053 45.3122 20.2805 48 20 48H32C31.7211 48 31.4947 45.3122 31.4947 41.9989C31.4962 38.6878 31.7211 36 32 36Z" fill="#BFBEBE"></path><path d="M24.4632 36H20C20.2971 36 20.5368 38.6878 20.5368 41.9989C20.5368 45.3122 20.2979 48 20 48H24.4632C24.7603 48 25 45.3122 25 41.9989C25 38.6878 24.7603 36 24.4632 36Z" fill="#AEAEAE"></path><path d="M51 36.0562C51 39.3397 48.5598 42 45.5548 42H5.44763C2.43939 42 0 39.3397 0 36.0562V5.93973C0 2.66197 2.43939 0 5.44763 0H45.5548C48.5598 0 51 2.65953 51 5.93973V36.0562Z" fill="#D1D2D2"></path><path d="M10.4715 36.0562V5.93973C10.4715 2.66197 12.9475 0 16 0H5.52931C2.47597 0 0 2.65953 0 5.93973V36.0562C0 39.3397 2.47597 42 5.52931 42H16C12.9475 42 10.4715 39.3388 10.4715 36.0554" fill="#C6C5C5"></path><path d="M51.4953 27.412C51.4953 30.6593 49.0437 33.2958 46.0246 33.2958H5.73015C2.70787 33.2958 0.25708 30.6617 0.25708 27.412V5.88783C0.25708 2.63486 2.70787 0 5.73015 0H46.0246C49.0437 0 51.4953 2.63486 51.4953 5.88783V27.412Z" fill="#243438"></path><path d="M0.254639 25.892H51.4961V35.0288H0.254639V25.892Z" fill="#243438"></path><path d="M47.3477 3H4.64592C4.29353 3 4 3.19752 4 3.43535V31.5646C4 31.8033 4.29353 32 4.64592 32H47.3477C47.5394 32 47.685 31.9589 47.7908 31.8863L47.8067 31.8702C47.8067 31.8702 47.8194 31.8605 47.8226 31.8517C47.8748 31.8242 47.9187 31.7831 47.9499 31.7326C47.9811 31.6822 47.9984 31.6242 48 31.5646V3.44099C47.9968 3.20316 47.7001 3.00564 47.3477 3.00564" fill="#58C5E8"></path><path d="M26.6257 21.7972C33.7664 26.1331 40.7424 29.0855 48 30.8713V3.43536C48 3.19753 47.7033 3 47.3508 3H8.16301C12.1884 10.6874 19.1159 17.238 26.6273 21.7972H26.6257ZM26.683 26.4016C18.0674 21.6456 9.44143 15.0579 4 6.9231V31.5646C4 31.8033 4.29355 32 4.64597 32H39.5005C35.2429 30.6093 30.9971 28.7864 26.6846 26.4048" fill="#28A6DE"></path><path d="M35 48C35 48.5515 34.7281 49 34.3943 49H16.6089C16.2719 49 16 48.5515 16 48C16 47.4478 16.2719 47 16.6089 47H34.3943C34.7281 46.9977 35 47.447 35 48Z" fill="#D1D2D2"></path><path d="M22.4063 48C22.4063 47.4478 22.6728 47 23 47H16.5937C16.2657 47 16 47.4478 16 48C16 48.5515 16.2665 49 16.5937 49H23C22.6728 49 22.4063 48.5515 22.4063 48Z" fill="#C6C5C5"></path><path d="M27.9069 37.072C27.8296 37.0031 27.7168 36.9833 27.5629 37.0244L26.6769 37.2348C26.4008 37.3044 26.2611 37.4738 26.2611 37.7465L26.258 38.6269C26.258 38.7545 26.2888 38.849 26.3503 38.9033C26.3763 38.9265 26.4071 38.9445 26.4409 38.9562C26.4747 38.968 26.5107 38.9731 26.5467 38.9714C26.5941 38.9714 26.6383 38.9619 26.6951 38.9517L27.5803 38.742C27.8564 38.6731 27.9968 38.503 28 38.2266V37.3491C27.9976 37.2194 27.9669 37.1263 27.9069 37.072ZM27.4367 38.0742C27.4367 38.1717 27.3878 38.2318 27.2876 38.2574L26.9736 38.3337C26.9564 38.3369 26.939 38.3388 26.9215 38.3395C26.8957 38.34 26.8705 38.332 26.8505 38.3168C26.83 38.2985 26.8166 38.264 26.8205 38.2142V37.9012C26.8205 37.8037 26.8694 37.7435 26.968 37.7186L27.286 37.6424C27.3404 37.6307 27.3815 37.6365 27.4051 37.6592C27.4288 37.679 27.4391 37.712 27.4391 37.7589V38.0749H27.4367V38.0742ZM25.7373 37.7428C25.7373 37.4701 25.5992 37.3 25.3207 37.2311L24.4355 37.0207C24.2824 36.9797 24.1688 37.0017 24.0955 37.0684C24.0308 37.1226 24 37.2157 24 37.3448L24.0032 38.2208C24.0063 38.4971 24.1444 38.668 24.4197 38.7361L25.3081 38.9465C25.3602 38.9612 25.4091 38.9663 25.4517 38.9663C25.4878 38.9681 25.5239 38.9629 25.5577 38.9511C25.5915 38.9392 25.6223 38.9209 25.6481 38.8974C25.7097 38.8439 25.7404 38.7501 25.7404 38.621L25.7373 37.7428ZM25.1487 38.3131C25.1329 38.3285 25.1093 38.3359 25.0785 38.3359C25.0785 38.3359 25.0446 38.3329 25.0264 38.33L24.7108 38.2538C24.613 38.2281 24.5609 38.168 24.5609 38.0705V37.7545C24.5609 37.7091 24.5736 37.6754 24.5941 37.6548C24.6185 37.6321 24.6588 37.6263 24.7164 37.638L25.032 37.7142C25.1298 37.7391 25.1819 37.7993 25.1819 37.8968V38.2127C25.1819 38.2582 25.1819 38.2926 25.1487 38.3131ZM26.3598 39.9999C26.3755 39.9999 26.3905 39.997 26.4118 39.9904L26.7274 39.9149C26.8252 39.8937 26.8773 39.8306 26.8773 39.7302V39.4179C26.8786 39.382 26.8678 39.3467 26.8465 39.3167C26.8189 39.2918 26.7755 39.2889 26.7243 39.3013L26.4055 39.3768C26.3077 39.3996 26.258 39.4619 26.258 39.5616L26.2548 39.8761C26.2548 39.9215 26.2675 39.9523 26.2888 39.9721C26.3045 39.9912 26.329 39.9999 26.3598 39.9999ZM25.6394 39.9999C25.6206 39.9997 25.6019 39.9965 25.5842 39.9904L25.2686 39.9149C25.1708 39.8937 25.1211 39.8306 25.1211 39.7302L25.1179 39.4179C25.1179 39.3717 25.1306 39.3409 25.1519 39.3167C25.1763 39.2918 25.2189 39.2889 25.271 39.3013L25.5929 39.3768C25.6884 39.3996 25.7404 39.4619 25.7404 39.5616V39.8761C25.7404 39.9215 25.7278 39.9523 25.7097 39.9721C25.7009 39.9812 25.69 39.9885 25.6779 39.9933C25.6658 39.9981 25.6526 40.0004 25.6394 39.9999Z" fill="#243438"></path></svg>
               <p>Logica de programación</p>
              </div>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, iusto accusantium? Quaerat eaque veniam expedita. Odit, saepe ea aspernatur, suscipit quia amet quaerat voluptatem laudantium corrupti expedita cum, at laborum!    </p>
             </div>
          </div>
         </div>
         <?php 
            $id_materia=2;
            $_SESSION['Id_materia']=$id_materia;
            $sql = "SELECT * FROM `materias` WHERE  Id_materia='$_SESSION[Id_materia]' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
            $id_profesor= $row["Id_profesor"];
            $sql = "SELECT * FROM `usuarios` WHERE  Id='$id_profesor' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
        ?>
         <div class="col l6 animacion actividades materias profesor">
         <div class="row">
		  <div class="contenedor_perfil">
        <div class="col l4 foto_perfil">
        <img src="Imagenes perfil/<?php echo $row["foto"]?>" class="responsive-img" width="auto"> 
      </div>
        <div class="col l7 right nombre">
          <h2 class="nombre_perfil curso">Profesor del curso:</h2>
          <div class="nombre_profesor">
            <i class="material-icons">account_circle</i>
            <h2 class="nombre_perfil"> <?php echo $row["nombre"] ." ". $row["apellido"]?></h2>
          </div>
          <div class="nombre_profesor">
            <i class="material-icons">email</i>
            <h2 class="nombre_perfil"> <?php echo $row["correo"] ?></h2>
          </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <ul class="tabs tab_materia">
          <li class="tab"><a href="#1" class="active">Actividades</a></li>
          <li class="tab"><a href="#2">Entregables</a></li>
        </ul>
        <div id="1" class="col s12">
          <div class="row vistarapida">
            <div class="row cajas">
                <div class="col l12 caja_vista materia">
                <ul class="collapsible">
                 <li class="active">
                  <div class="collapsible-header">
                    <p>Clase 1 - Diagramas de Flujo</p>
                  </div>
                  <div class="collapsible-body">
                  </div>
                  </li>
                 </ul>
                </div>
            </div>
          </div>
        </div>
        <div id="2" class="col s12">
        <div class="row vistarapida">
            <div class="row cajas">
                <div class="col l12 caja_vista materia">
                <ul class="collapsible">
                 <li class="active">
                  <div class="collapsible-header">
                    <p>Clase 1 - Diagramas de Flujo</p>
                  </div>
                  <div class="collapsible-body">
                  </div>
                  </li>
                 </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="col s12 btnprofe">
          <a class="waves-effect waves-light btn-large shake-slow  btninicio" href="crearclase.php">Crear clase</a> 
        </div> 
    </div>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
             M.AutoInit();
             });
        </script>
    </body>
</html>