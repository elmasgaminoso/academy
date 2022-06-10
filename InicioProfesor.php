<?php
session_start();
$pagina="profesor";
include("Config.php");
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
    <?php
    $sql = "SELECT * FROM `usuarios` WHERE  id='$_SESSION[Id]' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
        include ('header.php');
        ?>  
    <div class="container">
        <div class="row center">	
          <h1 class="fuente1 center">Bienvenido a la sesión de Profesor.</h1>
          <div class="row cajas admin">
                <div class="col l6 caja_vista ">
                    <a href="materiasasignadasprofesor.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="85" viewBox="0 0 80 85" fill="none"><path d="M19.28 60.7143L36 69.9429V80.9524H8C3.56 80.9524 0 77.35 0 72.8571V8.09524C0 5.94825 0.842854 3.88919 2.34315 2.37104C3.84344 0.852888 5.87827 0 8 0H12V28.3333L22 22.2619L32 28.3333V0H56C58.1217 0 60.1566 0.852888 61.6569 2.37104C63.1571 3.88919 64 5.94825 64 8.09524V42.6619L58 39.3429L19.28 60.7143ZM80 60.7143L58 48.5714L36 60.7143L58 72.8571L80 60.7143ZM44 69.1738V77.269L58 85L72 77.269V69.1738L58 76.9048L44 69.1738Z" fill="url(#paint0_linear_15_250)"></path><defs><linearGradient id="paint0_linear_15_250" x1="0" y1="42.5" x2="79.9988" y2="42.5" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Materias Asignadas</p>
                    </a>
                </div>
                <div class="col l6 caja_vista">
                    <a href="perfilprofesor.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="81" viewBox="0 0 75 81" fill="none"><path d="M34.2914 0.0625992C34.1135 0.10881 33.3857 0.247437 32.6741 0.370663C24.2477 1.91096 17.2607 8.85774 15.8536 17.0676C15.5463 18.9159 15.5463 21.9657 15.8536 23.7987C17.3254 32.4398 24.5226 39.2633 33.7254 40.7112C35.5206 41.0039 38.7553 41.0039 40.6314 40.7112C49.3166 39.3712 56.3844 32.9173 58.2606 24.6151C58.6811 22.7667 58.6811 18.1458 58.2606 16.2974C56.4491 8.33403 50.0121 2.14201 41.6504 0.355259C40.4697 0.0934067 35.0678 -0.106834 34.2914 0.0625992Z" fill="url(#paint0_linear_15_242)"></path><path d="M19.3307 43.8209C14.0582 44.8837 9.59429 47.148 5.90673 50.6137C3.46453 52.9087 0.860599 56.4822 0.148965 58.5C-0.190678 59.4858 -0.0289434 59.9325 1.47519 62.0427C7.10357 69.9753 15.6917 75.9517 25.0723 78.4778C31.7843 80.2645 39.0139 80.5418 45.6289 79.2633C52.2277 77.9849 58.7456 75.0583 63.9049 71.0997C67.1235 68.6352 71.28 64.1683 73.3988 60.9183C74.4986 59.2085 74.4986 59.1315 73.4473 57.1599C69.7436 50.2286 62.4493 45.0994 54.3787 43.7439C52.3409 43.405 51.6454 43.5437 49.8502 44.6681C45.8553 47.1634 41.7957 48.334 37.1216 48.334C32.3342 48.334 28.4849 47.1942 24.0372 44.4524C22.8242 43.6977 22.5978 43.6207 21.6921 43.5899C21.1583 43.5591 20.0909 43.6669 19.3307 43.8209Z" fill="url(#paint1_linear_15_242)"></path><defs><linearGradient id="paint0_linear_15_242" x1="15.6232" y1="20.4654" x2="58.5753" y2="20.4654" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient><linearGradient id="paint1_linear_15_242" x1="0" y1="61.818" x2="74.2286" y2="61.818" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Perfil</p>
                    </a>
                </div>
            </div>
            <div class="row cajas admin">
            <div class="col l6 caja_vista">
                    <a href="cerrar_sesion.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="54" viewBox="0 0 50 54" fill="none"><path d="M23.3018 0.187004C21.5021 0.678371 20.1551 1.9852 19.6803 3.72066C19.4374 4.61976 19.4374 25.3617 19.6803 26.2608C19.9343 27.1703 20.3538 27.8813 21.0494 28.5399C23.092 30.474 26.3159 30.474 28.3585 28.5399C29.0541 27.8813 29.4736 27.1703 29.7275 26.2608C29.9815 25.3512 29.9704 4.61976 29.7275 3.69975C28.9878 1.02337 26.0841 -0.565727 23.3018 0.187004Z" fill="url(#paint0_linear_226_284)"></path><path d="M9.56697 12.304C8.1979 12.649 7.08277 13.4958 5.37144 15.5345C-1.91554 24.1804 -1.77201 36.5796 5.70266 45.0583C16.335 57.1229 36.1092 56.0879 45.3284 42.9987C47.2826 40.2282 48.6075 36.9141 49.1706 33.4432C49.4356 31.7809 49.4466 28.4982 49.1816 26.8568C48.4529 22.3509 46.5981 18.4095 43.606 15.0326C42.4357 13.7154 41.6297 13.0358 40.7795 12.6385C37.3569 11.039 33.3049 13.4435 33.3159 17.0817C33.3159 18.4513 33.7355 19.3295 35.0935 20.8036C36.5619 22.3927 37.3127 23.4904 37.9531 25.0168C40.5366 31.1327 38.1518 38.0851 32.2781 41.5873C27.2545 44.5669 20.7735 44.2846 16.0369 40.8764C14.4691 39.7578 12.7909 37.8446 11.8966 36.1614C10.2846 33.1505 9.98653 29.2927 11.0796 25.9891C11.7199 24.0863 12.6474 22.5913 14.3035 20.8036C14.8556 20.2077 15.4186 19.5072 15.5511 19.2354C16.5338 17.2804 16.1473 15.0745 14.5574 13.5795C13.2325 12.3249 11.3998 11.8544 9.56697 12.304Z" fill="url(#paint1_linear_226_284)"></path><defs><linearGradient id="paint0_linear_226_284" x1="19.4982" y1="14.9952" x2="29.9137" y2="14.9952" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient><linearGradient id="paint1_linear_226_284" x1="0" y1="32.8157" x2="49.3742" y2="32.8157" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Cerrar sesión</p>
                    </a>
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